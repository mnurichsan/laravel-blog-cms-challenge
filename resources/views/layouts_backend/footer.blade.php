 <!-- Footer -->
 <footer class="footer pt-0">
     <div class="row align-items-center justify-content-lg-between">
         <div class="col-lg-6">
             <div class="copyright text-center text-lg-left text-muted">
                 &copy; 2020
                 Ichsan Blog
             </div>
         </div>

     </div>
 </footer>
 </div>
 </div>
 <!-- Argon Scripts -->
 <!-- Core -->
 <script src="{{asset('assets_backend/vendor/jquery/dist/jquery.min.js')}}"></script>
 <script src="{{asset('assets_backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
 <script src="{{asset('assets_backend/vendor/js-cookie/js.cookie.js')}}"></script>
 <script src="{{asset('assets_backend/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
 <script src="{{asset('assets_backend/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
 <script src="{{asset('assets_backend/vendor/lavalamp/js/jquery.lavalamp.min.js')}}"></script>
 <!-- Optional JS -->
 <script src="{{asset('assets_backend/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
 <script src="{{asset('assets_backend/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
 <script src="{{asset('assets_backend/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
 <script src="{{asset('assets_backend/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
 <script src="{{asset('assets_backend/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>
 <!-- Argon JS -->
 <script src="{{asset('assets_backend/js/argon.min-v=1.0.0.js')}}"></script>
 <script>
     // Facebook Pixel Code Don't Delete
     !(function(f, b, e, v, n, t, s) {
         if (f.fbq) return;
         n = f.fbq = function() {
             n.callMethod ?
                 n.callMethod.apply(n, arguments) :
                 n.queue.push(arguments);
         };
         if (!f._fbq) f._fbq = n;
         n.push = n;
         n.loaded = !0;
         n.version = "2.0";
         n.queue = [];
         t = b.createElement(e);
         t.async = !0;
         t.src = v;
         s = b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t, s);
     })(
         window,
         document,
         "script",
         "//connect.facebook.net/en_US/fbevents.js"
     );

     try {
         fbq("init", "111649226022273");
         fbq("track", "PageView");
     } catch (err) {
         console.log("Facebook Track Error:", err);
     }
 </script>

 </body>

 </html>