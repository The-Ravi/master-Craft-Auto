<h2>Tag Management</h2>
<a href="<?php echo site_url('admin/tags/create'); ?>" class="btn btn-success mb-2">Add New Tag</a>
<table class="table table-bordered" id="tagsTable">
    <thead>
        <tr>
            <th>ID</th>
            <th>Page</th>
            <th>Tag Type</th>
            <th>Tag Key</th>
            <th>Tag Value</th>
            <th>Last Modified</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if(isset($tags) && !empty($tags)): ?>
            <?php foreach($tags as $tag): ?>
                <tr>
                    <td><?php echo htmlspecialchars($tag->id); ?></td>
                    <td><?php echo htmlspecialchars($tag->page); ?></td>
                    <td><?php echo htmlspecialchars($tag->tag_type); ?></td>
                    <td><?php echo htmlspecialchars($tag->tag_key); ?></td>
                    <td><?php echo htmlspecialchars($tag->tag_value); ?></td>
                    <td><?php echo htmlspecialchars($tag->last_modified); ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/tags/edit/'.$tag->id); ?>">
                            <i class="far fa-edit" title="Edit Tag"></i>
                        </a>
                        <a href="javascript:void(0);" onclick="deleteTag(<?php echo $tag->id; ?>)">
                            <i class="fas fa-trash-alt" title="Delete Tag"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<script>
function deleteTag(tagId) {
    if(confirm('Are you sure to delete this tag?')) {
        $.ajax({
            url: '<?php echo base_url("admin/tags/tagDelete"); ?>',
            method: 'POST',
            data: {id: tagId},
            success: function(response) {
                alert('Tag deleted successfully!');
                location.reload();
            },
            error: function() {
                alert('Failed to delete tag.');
            }
        });
    }
}
</script>