 <section id="contact" class="contact">
     <div class="container">

         <div class="section-title">
             <h2>Contact</h2>
             <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                 sint
                 consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                 Quia
                 fugiat sit in iste officiis commodi quidem hic quas.</p>
         </div>

         <div class="row">

             <div class="col-lg-5 d-flex align-items-stretch">
                 <div class="info">
                     <div class="address">
                         <i class="bi bi-geo-alt"></i>
                         <h4>Location:</h4>
                         <p>Ammochostos Cyprus</p>
                     </div>

                     <div class="email">
                         <i class="bi bi-envelope"></i>
                         <h4>Email:</h4>
                         <p>soteris100@gmail.com</p>
                     </div>

                     <div class="phone">
                         <i class="bi bi-phone"></i>
                         <h4>Call:</h4>
                         <p>+357 99148662</p>
                     </div>

                     <div style="max-width:100%;overflow:hidden;color:red;width:500px;height:300px;">
                         <div id="embedmap-canvas" style="height:100%; width:100%;max-width:100%;"><iframe
                                 style="height:100%;width:100%;border:0;" frameborder="0"
                                 src="https://www.google.com/maps/embed/v1/place?q=paralimni&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                         </div><a class="googlecode" rel="nofollow" href="https://www.embed-map.com"
                             id="get-data-forembedmap">https://www.embed-map.com</a>
                         <style>
                             #embedmap-canvas img {
                                 max-width: none !important;
                                 background: none !important;
                                 font-size: inherit;
                                 font-weight: inherit;
                             }

                         </style>
                     </div>
                 </div>

             </div>

             <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
               
                 <form method="post" role="form" wire:submit.prevent="submit" class="php-email-form">
                    @include('emails.message')
                     <div class="row">
                         <div class="form-group col-md-6">
                             <label for="name">Your Name</label>
                             <input type="text" wire:model="name" name="name" class="form-control" id="name" >
                             @error('name') <span class="error text-danger">{{ $message }}</span> @enderror
                         </div>
                         <div class="form-group col-md-6">
                             <label for="name">Your Email</label>
                             <input type="email" class="form-control" wire:model="email" name="email" id="email"
                                 >
                             @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="name">Subject</label>
                         <input type="text" class="form-control" wire:model="subject" name="subject" id="subject">
                         @error('subject') <span class="error text-danger">{{ $message }}</span> @enderror
                     </div>
                     <div class="form-group">
                         <label for="name">Message</label>
                         <textarea class="form-control" wire:model="message" name="message" rows="10" ></textarea>
                         @error('message') <span class="error text-danger">{{ $message }}</span> @enderror
                     </div>
                     <div class="text-center">
                         <button type="submit">Send Message</button>
                     </div>

                 </form>
             </div>

         </div>

     </div>
 </section><!-- End Contact Section -->
