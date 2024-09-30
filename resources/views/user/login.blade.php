
 @include('partials.header')







     <main class=" max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl"> 
      <main class=" max-w-lg mx-auto"> 

         
 
                     <form action ="/login/process"  method="post" class="flex flex-col ">
                        @csrf
             

          
                             <div class="max-w-5xl py-6 flex flex-col justify-center sm:py-12 ">
                              
                              <div class="relative py-3 sm:max-w-xl sm:mx-auto w-full">
                                <div
                                  class="absolute inset-0 bg-gradient-to-r from-blue-500 to-red-900 rounded-lg shadow-2xl transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                                </div>
                                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                                  <div class="max-w-md mx-auto">
                                    <div>
                                      <h1 class="text-xl font-Bacasime Antique text-black" >CIVIL SERVICE 2024 SCORING</h1>
                                      {{-- <img src="{{url('/build/title.png')}}" alt=""> --}}
                                    </div>
                                    <div class="divide-y divide-gray-200 ">
                                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="relative">
                                          <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                                          <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Email Address</label>
                                          
                                        </div>
                                        <div class="relative">
                                          <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Password" />
                                          <label for="password" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Password</label>
                                        </div>
                                        <div class="relative">
                                          <button class="bg-blue-500 text-white rounded-md px-2 py-1 hover:bg-green-700 text-white w-full py-2 rounded-lg shadow-2xl hover: shadow-xl transition duration-200">Login</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                      </form>                   
              </section>
         </main>       












 
<!-- <start login> --}}



 {{-- <main class="bg-wgi-100 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl"> --}}
{{-- 
         <section> --}}
              {{-- <h3 class="font-bold text-2xl text-center font-serif">WELCOME TO ABLE SYSTEM</h3> --}}
              {{-- <p class="text-gray-600 pt-2">Sign Up a new  Account <a href="/register"  class="text-lime-700 font-bold">Here </a></p> --}}
        {{-- </section>  --}}

{{-- 
               <section class="mt-10"> --}}
{{-- 
                     <form action ="/login/process"  method="post" class="flex flex-col">
                        @csrf
                        @error('email')
                                 
                        <p class="text-red-500 text-xs  p-1">{{$message}} </p>
                        @enderror
                        
                          <div class="mb-6 pt-3 rounded bg-gray-200">
                               <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email:</label>
                                  <input type="email"  name="email" class="bg-gray-200 rounded w-full text-greay-700 focus:outline-none border-b-4 border-gray-400 px-3">
                         </div>
                                 
                                  <div class="mb-6 pt-3 rounded bg-gray-200">
                                       <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password:</label>
                                           <input type="password"  name="password" class="bg-gray-200 rounded w-full text-greay-700 focus:outline-none border-b-4 border-gray-400 px-3">
                                   </div>

                             <button type="submit" class="bg-lime-900 hover:bg-lime-700 text-white font-bold py-2 rounded shahow-lg hover: shadow-xl transition duration-200" type="submit">Login</button>      
                       
                  </form> --}}

{{-- 
                  <section class="h-screen"> --}}
                 
 
 
                </form>
                   
 -->
