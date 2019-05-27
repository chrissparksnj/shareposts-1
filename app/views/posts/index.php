<?php require __DIR__ . '/../inc/header.php';?>
<?php flash('post_message');?>
  <div class="row align-items-center mb-3">
    <div class="col-md-6">
      <h1><?php echo $data['title']?></h1>
    </div>
    <div class="col-md-6 text-right">
      <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary ">
        <i class="fas fa-pencil-alt"></i> Add Post
      </a>
    </div>
  </div>
    <?php foreach ($data['posts'] as $post) {?>
        <div class="card card-body mb-3">
          <h2 class="card-title"><?php echo $post->title; ?></h2>
          <div class="bg-light p-2 mb-3">
            Written by <?php echo $post->name; ?> on <?php echo $post->postCreated; ?>
          </div>
          <p class="card-text">
            <?php echo $post->body; ?>
          </p>
          <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark">More</a>
        </div>
    <?php } ?>

<?php require __DIR__ . '/../inc/footer.php';?>