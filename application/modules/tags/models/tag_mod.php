<?php

class Tag_mod extends CI_Model
{
    // Get tag records with optional search, pagination
    public function getList($searchVal = '', $limit = '', $offset = '')
    {
        $this->db->select('*')->from('cr_page_tags');
        if ($searchVal) {
            // Search in tag_key, tag_type, or tag_value as appropriate
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

    // Get all tags for a specific page (or entity)
    public function getTagsByPage($page = '')
    {
        // Useful for rendering all tags on a particular page/view
        return $this->db
            ->where('page', $page)
            ->order_by('id', 'asc')
            ->get('cr_page_tags')
            ->result();
    }

    // Get a tag details for edit by its id
    public function edit($id = '')
    {
        return $this->db->where('id', $id)->get('cr_page_tags')->row();
    }

    // Get a tag (or tag value) by unique page + type + key
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

    // Optionally, method to render tags in custom HTML for a view/table
    public function renderTagsHtml($tags = [])
    {
        $html = "";
        foreach($tags as $t) {
            $html .= "<p><strong>{$t->tag_type}: </strong> {$t->tag_value}</p>";
        }
        return $html;
    }
}
?>