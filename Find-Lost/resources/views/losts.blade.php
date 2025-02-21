<x-app-layout>
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2>Get The Latest App From App Stores</h2>
                                        <p>Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS layout provided by TemplateMo, a great website to download free CSS templates.</p>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <button
                                            class="relative group border-none bg-transparent p-0 outline-none cursor-pointer font-mono font-light uppercase text-base"
                                        >
  <span
      class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-25 rounded-lg transform translate-y-0.5 transition duration-[600ms] ease-[cubic-bezier(0.3,0.7,0.4,1)] group-hover:translate-y-1 group-hover:duration-[250ms] group-active:translate-y-px"
  ></span>

                                            <span
                                                class="absolute top-0 left-0 w-full h-full rounded-lg bg-gradient-to-l from-[hsl(217,33%,16%)] via-[hsl(217,33%,32%)] to-[hsl(217,33%,16%)]"
                                            ></span>

                                            <div
                                                class="relative flex items-center justify-between py-3 px-6 text-lg text-white rounded-lg transform -translate-y-1 bg-gradient-to-r from-[#f27121] via-[#e94057] to-[#8a2387] gap-3 transition duration-[600ms] ease-[cubic-bezier(0.3,0.7,0.4,1)] group-hover:-translate-y-1.5 group-hover:duration-[250ms] group-active:-translate-y-0.5 brightness-100 group-hover:brightness-110"
                                           id="form_button" >
                                                <span class="select-none">Add Annonce</span>

                                                <svg
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
                                                    class="w-5 h-5 ml-2 -mr-1 transition duration-250 group-hover:translate-x-1"
                                                >
                                                    <path
                                                        clip-rule="evenodd"
                                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                        fill-rule="evenodd"
                                                    ></path>
                                                </svg>
                                            </div>
                                        </button>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="assets/images/slider-dec.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-wrap justify-center gap-6  p-6">
@foreach($losts as $lost )
            <a href="post/{{$lost->id}}">
        <div class="relative max-w-xs bg-[#30344c] p-4 shadow-lg rounded-lg transition duration-200 ease-in-out">
            <div class="flex flex-col">
                <p class="text-[#c0c3d7] font-normal leading-6 mb-1">
                    {{$lost->item_description}}
                </p>
                <span class="text-[#C6E1ED] text-sm font-semibold">{{$lost->item_name}}</span>

                <div class="flex items-center justify-between mt-3 text-[#9fa4aa] text-xs">
                    <div class="flex space-x-4">
                        <div class="flex items-center cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1 stroke-current"><path stroke-width="1.5" d="M16 10H16.01M12 10H12.01M8 10H8.01M3 10C3 4.64706 5.11765 3 12 3C18.8824 3 21 4.64706 21 10C21 15.3529 18.8824 17 12 17C11.6592 17 11.3301 16.996 11.0124 16.9876L7 21V16.4939C4.0328 15.6692 3 13.7383 3 10Z"></path></svg>
                            18
                        </div>
                        <div class="flex items-center cursor-pointer">
                            <svg fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5 mr-1"><path d="M0 10.284l0.505 0.36c0.089 0.064 0.92 0.621 2.604 0.621 0.27 0 0.55-0.015 0.836-0.044 3.752 4.346 6.411 7.472 7.060 8.299-1.227 2.735-1.42 5.808-0.537 8.686l0.256 0.834 7.63-7.631 8.309 8.309 0.742-0.742-8.309-8.309 7.631-7.631-0.834-0.255c-2.829-0.868-5.986-0.672-8.686 0.537-0.825-0.648-3.942-3.3-8.28-7.044 0.11-0.669 0.23-2.183-0.575-3.441l-0.352-0.549-8.001 8.001z"></path></svg>
                            7
                        </div>
                        <div class="flex items-center cursor-pointer">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1"><path stroke-width="2" d="M9 12C9 13.6569 7.65685 15 6 15C4.34315 15 3 13.6569 3 12C3 10.3431 4.34315 9 6 9C7.65685 9 9 10.3431 9 12Z"></path></svg>
                            2
                        </div>
                    </div>

                    <div class="flex -space-x-2">
                        <span class="w-5 h-5 bg-blue-600 border border-white rounded-full grid place-items-center text-[8px] font-bold text-white">+20</span>
                        <span class="w-5 h-5 bg-blue-600 border border-white rounded-full grid place-items-center"></span>
                        <span class="w-5 h-5 bg-blue-600 border border-white rounded-full grid place-items-center"></span>
                    </div>
                </div>
            </div>
        </div>
            </a>
        @endforeach
    </div>
    <div class="w-[400px] bg-[#212121] p-8 text-sm text-white flex flex-col gap-5 rounded-2xl border-2 border-transparent hidden position-absolute top-50 right-50 " style="background: linear-gradient(#212121, #212121) padding-box, linear-gradient(145deg, transparent 35%,#e81cff, #40c9ff) border-box;" id="form">
        <button class="text-gray-400 hover:text-gray-300 transition-colors ml-3" id="close_form">✕</button>

        <form class="flex flex-col gap-5" method="post" action="addAnnonce" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-0.5">
                <label for="item_name" class="block mb-1.5 text-[#717171] font-semibold text-xs">
                    Item name
                </label>
                <input
                    type="text"
                    id="item_name"
                    name="item_name"
                    required
                    class="w-full py-3 px-4 rounded-lg text-white bg-transparent border border-[#414141] font-inherit placeholder:opacity-50 focus:outline-none focus:border-[#e81cff]"
                >
            </div>

            <div class="flex flex-col gap-0.5">
                <label for="item_description" class="block mb-1.5 text-[#717171] font-semibold text-xs">
                    How it's look like?
                </label>
                <textarea
                    name="item_description"
                    id="item_description"
                    rows="4"
                    required
                    class="w-full py-3 px-4 rounded-lg resize-none text-white h-24 border border-[#414141] bg-transparent font-inherit focus:outline-none focus:border-[#e81cff]"
                ></textarea>
                <label for="category_id" class="block mb-1.5 text-[#717171] font-semibold text-xs">Category</label>
                <select name="category_id"  class="w-full py-3 px-4 rounded-lg text-white bg-transparent border border-[#414141] font-inherit placeholder:opacity-50 focus:outline-none focus:border-[#e81cff]">
                    <option value="1" class="w-full py-3 px-4 rounded-lg text-white bg-transparent border border-[#414141] font-inherit placeholder:opacity-50 focus:outline-none focus:border-[#e81cff]">Categorie 1</option>
                </select>
                <label for="status" class="block mb-1.5 text-[#717171] font-semibold text-xs">STATUT</label>
                <select name="status"  class="w-full py-3 px-4 rounded-lg text-white bg-transparent border border-[#414141] font-inherit placeholder:opacity-50 focus:outline-none focus:border-[#e81cff]">
                    <option value="I LOST IT" class="w-full py-3 px-4 rounded-lg text-white bg-transparent border border-[#414141] font-inherit placeholder:opacity-50 focus:outline-none focus:border-[#e81cff]">I LOST IT</option>
                    <option value="I FOUND IT" class="w-full py-3 px-4 rounded-lg text-white bg-transparent border border-[#414141] font-inherit placeholder:opacity-50 focus:outline-none focus:border-[#e81cff]">I FOUND IT</option>

                </select>
                <label for="photo" class="block mb-1.5 text-[#717171] font-semibold text-xs">
                    Photo
                </label>
                <input type="file" name="photo"  class="w-full py-3 px-4 rounded-lg text-white bg-transparent border border-[#414141] font-inherit placeholder:opacity-50 focus:outline-none focus:border-[#e81cff]">
            </div>

            <button
                class="flex items-start justify-center self-start text-[#717171] font-semibold w-[40%] bg-[#313131] border border-[#414141] py-3 px-4 text-sm gap-2 mt-2 cursor-pointer rounded-md hover:bg-white hover:border-white active:scale-95"
                type="submit"
            >
                Submit
            </button>
        </form>
    </div>
</x-app-layout>
<script>
    document.getElementById('form_button').addEventListener('click',function(){
        document.getElementById('form').classList.toggle('hidden');
    })
    document.getElementById('close_form').addEventListener('click',function(){
        document.getElementById('form').classList.toggle('hidden');

    })
</script>
