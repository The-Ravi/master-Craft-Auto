<h2><?php echo isset($row) ? 'Edit' : 'Add'; ?> Tag</h2>
<form method="post" action="<?php echo isset($row) ? base_url('admin/tags/updateTag/'.$row->id) : base_url('admin/tags/saveTag'); ?>">
    <div class="form-group">
        <label>Page</label>
        <input type="text" name="page" class="form-control" required
               value="<?php echo isset($row) ? htmlspecialchars($row->page) : ''; ?>">
    </div>
    <div class="form-group">
        <label>Tag Type</label>
        <select name="tag_type" class="form-control" required>
            <option value="h1" <?php if(isset($row) && $row->tag_type == 'h1') echo 'selected'; ?>>H1</option>
            <option value="h2" <?php if(isset($row) && $row->tag_type == 'h2') echo 'selected'; ?>>H2</option>
            <option value="meta" <?php if(isset($row) && $row->tag_type == 'meta') echo 'selected'; ?>>Meta</option>
            <!-- Add more types as needed -->
        </select>
    </div>
    <div class="form-group">
        <label>Tag Key</label>
        <input type="text" name="tag_key" class="form-control" required
               value="<?php echo isset($row) ? htmlspecialchars($row->tag_key) : ''; ?>">
    </div>
    <div class="form-group">
        <label>Tag Value</label>
        <input type="text" name="tag_value" class="form-control" required
               value="<?php echo isset($row) ? htmlspecialchars($row->tag_value) : ''; ?>">
    </div>
    <button type="submit" class="btn btn-primary"><?php echo isset($row) ? 'Update' : 'Save'; ?> Tag</button>
    <a href="<?php echo base_url('admin/tags'); ?>" class="btn btn-secondary">Cancel</a>
</form>