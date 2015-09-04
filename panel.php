<?php

function psmu_maintenance_panel() {

    psmu_maintenance_is_checked("psmu_maintenance_check");
 
?>
<style>
.wrap h2 a {text-decoration:none;color:#333333}
.wrap h2 a:hover {text-decoration:underline;color:#333333}
th label{padding-left:10px}
th,td{border-left:1px solid #e1e1e1;border-right:1px solid #e1e1e1;border-top:1px solid #e1e1e1}
.form-table{margin-top:0px}
.whatsthat {background:#fafafa;border:1px solid #e1e1e1;padding-left:4px;padding-top:4px;padding-right:4px;padding-bottom:4px;margin-top:10px;margin-right:0px;font-size:12px;}
</style>
<div class="wrap">
<h2><b>Maintenance</b> Mode</h2><br />

<form action="" method="post">

<div class="postbox">
<table class="form-table">
<tbody>

<tr valign="top">
<th scope="row">
    <label for="home">Maintenance</label>
</th>
<td>
    <label for="psmu_maintenance_check" class="exp_label">
       <input name="psmu_maintenance_check" type="checkbox" class="psmu_maintenance_check" id="psmu_maintenance_check" value="1" <?php echo get_option("psmu_maintenance_check");?>>
       <small><i>Check to enable.</i></small>
       <div class="whatsthat">Enabling this option will put your website into maintenance mode. When this is enabled, you will still be able to view your blog when logged in, but your site visitors will not. Your visitors will see a Maintenance Mode message indicating the blog is temporary offline for work. This will not damage your Google rankings since we tell Google your blog is temporary under-going maintenance by sending them a 503 server response. Yoast SEO explains what a 503 is in <a target="_blank" href="https://yoast.com/http-503-site-maintenance-seo/">this article</a>.</div>
    </label>
</td>
</tr>

</tbody>
</table>
</div>

<input type="hidden" name="psmu_maintenance_submit" value="1">
<input type="submit" class="button button-primary" value="Update Mode">
</form>

</div><!--/.wrap -->
<?php

}
