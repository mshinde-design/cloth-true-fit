<?php $title='Home'; require 'includes/header.php';
$new=array_filter($P,fn($p)=>!empty($p['new'])); $best=array_filter($P,fn($p)=>!empty($p['best']));
$cc=['oversized-t-shirts','streetwear','hoodies','shirts','bottomwear','accessories']; ?>
<section class="hero"><div class="container"><span class="chip">SS DROP · DEMO CAMPAIGN</span><h1 class="display-font">FIND YOUR<br><span>TRUE FIT.</span></h1><p class="lead">Wear your vibe. Own your identity.</p>
<a href="shop.php" class="btn btn-tf btn-lg me-2">SHOP NOW</a><a href="shop.php?cat=new" class="btn btn-outline-light btn-lg">EXPLORE COLLECTION</a></div></section>
<section class="container py-5" id="categories"><h2 class="display-font mb-4">SHOP BY CATEGORY</h2><div class="row g-3">
<?php foreach($cc as $s):[$n,$d,$im]=$CATS[$s];?><div class="col-6 col-md-4 reveal"><a href="shop.php?cat=<?=$s?>" class="catcard" style="background-image:url(assets/img/<?=$im?>)"><span><?=e($n)?> <i class="bi bi-arrow-up-right"></i></span></a></div><?php endforeach?></div></section>
<section class="container pb-5"><h2 class="display-font mb-4">NEW ARRIVALS</h2><div class="row g-3"><?php foreach(array_slice($new,0,4) as $p)card($p)?></div></section>
<section class="bg-soft py-5"><div class="container"><div class="d-flex justify-content-between align-items-end mb-4"><h2 class="display-font m-0">BEST SELLERS</h2><a href="shop.php?cat=best" class="fw-bold">VIEW ALL →</a></div><div class="row g-3"><?php foreach(array_slice($best,0,4) as $p)card($p)?></div></div></section>
<section class="container py-5"><div class="row align-items-center g-4"><div class="col-md-6"><img class="img-fluid rounded-4" src="assets/img/women_streetwear.jpg" alt=""></div>
<div class="col-md-6"><h2 class="display-font display-5">NOT JUST CLOTHES.<br><span class="sky">IT'S YOUR IDENTITY.</span></h2><p class="fs-5 text-secondary">TRUE FIT COLLECTIVE is a movement built around self-expression, individuality and authentic style. No rules. No limits. Just your true fit.</p><a href="about.php" class="btn btn-dark">OUR STORY</a></div></div></section>
<section class="promo"><h2 class="display-font display-3">YOUR STYLE. YOUR RULES.</h2><a href="shop.php?cat=new" class="btn btn-dark btn-lg">EXPLORE THE DROP</a></section>
<section class="container py-5"><h2 class="display-font mb-1">WHAT PEOPLE SAY</h2><p class="small text-secondary">Demo testimonials — replace with real customer reviews.</p><div class="row g-3">
<?php foreach([['Placeholder review: the fit is exactly what I wanted.','Demo Customer A'],['Placeholder review: love the oversized cut.','Demo Customer B'],['Placeholder review: great everyday pieces.','Demo Customer C']] as $r):?>
<div class="col-md-4"><div class="bg-soft rounded-4 p-4 h-100"><div class="sky">★★★★★</div><p><?=$r[0]?></p><b class="small">— <?=$r[1]?></b></div></div><?php endforeach?></div></section>
<section class="container pb-5"><h2 class="display-font text-center mb-4">STYLE IT. POST IT. OWN IT.</h2><div class="row g-2">
<?php foreach(['mens_streetwear','women_hoodies','men_shirt','women_oversized_t_shirt','men_hoodies','women_shirt'] as $g):?><div class="col-4 col-md-2"><a href="<?=e($CFG['instagram'])?>" target="_blank"><img class="gal" src="assets/img/<?=$g?>.jpg" alt=""></a></div><?php endforeach?></div></section>
<?php require 'includes/footer.php';
