<?php
if (!function_exists('get_tag')) {
    /**
     * Get tag value by key from a tags array.
     * @param array $tags  Array of tag objects (from your model)
     * @param string $key  Tag key to look for
     * @param string $default Default value if not found
     * @return string
     */
    function get_tag($tags, $key, $default = '') {
        if (empty($tags)) return $default;
        foreach ($tags as $tag) {
            if ($tag->tag_key === $key) return $tag->tag_value;
        }
        return $default;
    }
}
?>