<?php
  $pageClass = 'monochrome';
  include './templates/header.php';
?>
<head>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f0f0f0;
    color: #333;
}

header {
    background-color: #ff69b4; 
    color: #fff;
    padding: 10px;
    text-align: center;
}

h1 {
    color: #4caf50; 
}

.masthead {
    text-align: center;
    margin-bottom: 20px;
}

h2 span {
    color: #ffA500;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff69b4;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.spacer {
    height: 20px;
}

.col-2 > div {
    flex: 1;
    padding: 0 10px;
}

.col-3 {
    display: flex;
    justify-content: space-around;
    margin-top: 30px;
}

.col-3 > div {
    text-align: center;
}

    </style>
</head>

  <main>
    <section class="masthead">
      <div class="f-row col-1">
        <h1>Monochrome</h1>
      </div>
    </section>
    <section class="row">
      <h2><span>Monochrome</span> Color Scheme</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eligendi ex excepturi fugit molestiae obcaecati repellat sit tempora? Consectetur doloribus eos est incidunt minus nesciunt nihil nostrum odio praesentium, repellendus saepe ullam. Autem beatae commodi corporis, ea in ipsum minima molestias nobis quae quas qui tempora voluptate? Accusamus architecto enim id repellendus?</p>
      <div class="spacer"></div>
      <a class="btn btn-1">Button</a>
    </section>
    <section class="g-row col-2">
      <div>
        <div class="mask"></div>
      </div>
      <div>
        <h3>Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto aspernatur enim illum pariatur, soluta!</p>
        <a href="#" class="btn btn-1">Button Text</a>
        <div class="spacer space-primary"></div>
        <h3>Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto aspernatur enim illum pariatur, soluta!</p>
        <a href="#" class="btn btn-2">Button Text</a>
        <div class="spacer space-secondary"></div>
        <h3>Title</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto aspernatur enim illum pariatur, soluta!</p>
        <a href="#" class="btn btn-1">Button Text</a>
        <div class="spacer space-primary"></div>
      </div>
    </section>
    <section class="g-row col-3">
      <div>
        <h4>Title</h4>
        <i class="fa-solid fa-swatchbook"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ut!</p>
      </div>
      <div>
        <h4>Title</h4>
        <i class="fa-solid fa-circle-half-stroke"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ut!</p>
      </div>
      <div>
        <h4>Title</h4>
        <i class="fa-solid fa-paint-roller"></i>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ut!</p>
      </div>
    </section>
  </main>
<?php include './templates/footer.php'; ?>