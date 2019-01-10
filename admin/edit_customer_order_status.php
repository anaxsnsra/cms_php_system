<div class="form-group">
    <label for="post_status">Status</label>
    <select name="post_status" id="">

        <option value='<?php echo $post_status?>'><?php echo $post_status?></option>;
        <?php
        if ($post_status == 'published')
        {
            echo "<option value='draft'>Draft</option>";
        }
        else
        {
            echo "<option value='published'>Published</option>";
        }
        ?>
    </select>
</div>