<p>Here is a list of all the blogs:</p>

<?php foreach($blog as $blog) { ?>
  <p>
    <?php echo $blog->title; ?> &nbsp; &nbsp;
     <a href='?controller=blog&action=read&blog_id=<?php echo $blog->blog_id; ?>'>Read a blog</a> &nbsp; &nbsp;
    <a href='?controller=blog&action=delete&blog_id=<?php echo $blog->blog_id; ?>'>Delete a blog</a> &nbsp; &nbsp;
   
  </p>
<?php } ?>