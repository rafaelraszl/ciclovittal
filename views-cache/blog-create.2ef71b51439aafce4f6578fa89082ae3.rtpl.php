<?php if(!class_exists('Rain\Tpl')){exit;}?>Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Blog
  </h1>
  <ol class="breadcrumb">
    <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/admin/blog">Blog</a></li>
    <li class="active"><a href="/admin/blog/create">Cadastrar</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-success">
        <div class="box-header with-border">
          <h3 class="box-title">Nova postagem</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/admin/blog/create" method="post">
          <div class="box-body">
            <div class="form-group">
              <label for="title">Título</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título">
            </div>
            <div class="form-group">
              <label for="preview">Preview</label>
              <input type="text" class="form-control" id="preview" name="preview" placeholder="Digite o preview">
            </div>
            <div class="form-group">
                  <label for="body">Texto</label>
                  <textarea style="resize: none" class="form-control" rows="7" id="body" name="body" placeholder="Digite o texto"></textarea>
                </div>
            <div class="form-group">
                  <label for="picture">Imagem</label>
                  <input type="file" id="picture" name="picture">

                  <!-- <p class="help-block">Example block-level help text here.</p> -->
                </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper