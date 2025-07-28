<?php
class Tag_mod extends CI_Model
{
    /**
     * Get all tags for a specific page
     */
    public function get_page_tags($page)
    {
        return $this->db->where('page', $page)->get('cr_page_tags')->result();
    }

    /**
     * Alias for get_page_tags for consistency with modules
     */
    public function getTagsByPage($page = '')
    {
        return $this->get_page_tags($page);
    }

    /**
     * Get tag records with optional search, pagination
     */
    public function getList($searchVal = '', $limit = '', $offset = '')
    {
        $this->db->select('*')->from('cr_page_tags');
        if ($searchVal) {
            $this->db->group_start()
                ->like('tag_key', $searchVal)
                ->or_like('tag_type', $searchVal)
                ->or_like('tag_value', $searchVal)
                ->group_end();
        }
        if ($limit) {
            $this->db->limit($limit, $offset);
            return $this->db->get()->result();
        } else {
            return $this->db->get()->num_rows();
        }
    }

    /**
     * Get a tag details for edit by its id
     */
    public function edit($id = '')
    {
        return $this->db->where('id', $id)->get('cr_page_tags')->row();
    }

    /**
     * Get a tag (or tag value) by unique page + type + key
     */
    public function getTagByContext($page = '', $tag_type = '', $tag_key = '')
    {
        return $this->db
            ->where([
                'page' => $page,
                'tag_type' => $tag_type,
                'tag_key' => $tag_key
            ])
            ->get('cr_page_tags')
            ->row();
    }

    /**
     * Insert default SEO tags for a page if they don't exist
     */
    public function ensure_seo_tags($page, $default_title = '', $default_description = '')
    {
        // Check if title tag exists
        $title_exists = $this->db
            ->where('page', $page)
            ->where('tag_key', $page . '_title')
            ->get('cr_page_tags')
            ->num_rows() > 0;

        if (!$title_exists && !empty($default_title)) {
            $this->db->insert('cr_page_tags', [
                'page' => $page,
                'tag_type' => 'title',
                'tag_key' => $page . '_title',
                'tag_value' => $default_title
            ]);
        }

        // Check if meta description tag exists
        $desc_exists = $this->db
            ->where('page', $page)
            ->where('tag_key', $page . '_meta_description')
            ->get('cr_page_tags')
            ->num_rows() > 0;

        if (!$desc_exists && !empty($default_description)) {
            $this->db->insert('cr_page_tags', [
                'page' => $page,
                'tag_type' => 'meta',
                'tag_key' => $page . '_meta_description',
                'tag_value' => $default_description
            ]);
        }
    }
}
?>