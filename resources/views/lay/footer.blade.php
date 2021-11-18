<footer class="footer">
    <footer class="bg-light text-center text-white">
      <div class="container p-4 pb-0">
        <section class="mb-4">
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #3b5998; color:white"
            {{-- href="{{asset((Auth::check()) ? Auth::user()->facebook : "" )}}" --}}
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>
    
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #55acee; color:white"
            {{-- href="{{asset((Auth::check()) ? Auth::user()->twitter : "" )}}" --}}
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>
    
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #dd4b39; color:white"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>
    
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #ac2bac; color:white"
            {{-- href="{{asset((Auth::check()) ? Auth::user()->instagram : "" )}}" --}}
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>
    
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #0082ca; color:white"
            {{-- href="{{asset((Auth::check()) ? Auth::user()->youtube : "" )}}" role="button" --}}
            ><i class="fab fa-youtube"></i>
          </a>
          <a
            class="btn btn-primary btn-floating m-1"
            style="background-color: #333333; color:white"
            href="#!"
            role="button"
            ><i class="fab fa-github" >github</i
          ></a>
        </section>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        
        <a class="text-white" href="#"></a>
      </div>
    </footer>

  </footer>

<script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>


</body>

</html>

