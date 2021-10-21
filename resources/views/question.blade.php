@extends('layout.index')
@section('content')

    @include('common.preloader')
    <div id="main-wrapper" class="dashboard-area">
      
        @include('common.top-header')
        @include('common.aside-menu')

        <div class="question-background" >
            <div class="container mt-5">
              <div class="row question-text">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <form method="post">
                                  <textarea id="mymce" name="area"></textarea>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 file-upload-area">
                  <div class="row">
                    <div class="col-12 file-upload-blog">
                      <div class="col-4">
                        <p class="upload-text">Please upload the document</p>
                        <input type="file" id="input-file-now" class="dropify" />
                      </div>
                      <div class="col-4">
                        <p class="upload-text">Please upload the pdf</p>
                        <input type="file" id="input-file-now" class="dropify" />
                      </div>
                      <div class="col-4">
                        <p class="upload-text">Please upload the image</p>
                        <input type="file" id="input-file-now" class="dropify" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="post-btn mt-3">
                    <div class="col-lg-2 col-md-4">
                      <button type="button" class="btn btn-rounded btn-block btn-info" onclick="Post_Question()">Post Question</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @include('common.footer')
    </div>
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script> 
    <script>
      $(document).ready(function() {
          if ($("#mymce").length > 0) {
              tinymce.init({
                  selector: "textarea#mymce",
                  theme: "modern",
                  height: 300,
                  plugins: [
                      "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                      "save table contextmenu directionality emoticons template paste textcolor"
                  ],
                  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
  
              });
          }
      });
    </script>

    <script>
      $(document).ready(function() {
          // Basic
          $('.dropify').dropify();

          // Translated
          $('.dropify-fr').dropify({
              messages: {
                  default: 'Glissez-déposez un fichier ici ou cliquez',
                  replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                  remove: 'Supprimer',
                  error: 'Désolé, le fichier trop volumineux'
              }
          });

          // Used events
          var drEvent = $('#input-file-events').dropify();

          drEvent.on('dropify.beforeClear', function(event, element) {
              return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
          });

          drEvent.on('dropify.afterClear', function(event, element) {
              alert('File deleted');
          });

          drEvent.on('dropify.errors', function(event, element) {
              console.log('Has Errors');
          });

          var drDestroy = $('#input-file-to-destroy').dropify();
          drDestroy = drDestroy.data('dropify')
          $('#toggleDropify').on('click', function(e) {
              e.preventDefault();
              if (drDestroy.isDropified()) {
                  drDestroy.destroy();
              } else {
                  drDestroy.init();
              }
          })
      });

      function Post_Question() {
        document.location.href = '/answers'
      }
    </script>
@endsection