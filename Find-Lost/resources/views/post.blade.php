<x-app-layout>

    <div class="flex justify-center items-center flex-col min-h-screen bg-gray-100 p-4">
        <article class="bg-white p-6 rounded-lg shadow-lg max-w-2xl text-center">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{$lost->item_name}}</h1>
            <img src="{{asset('storage/images/img-01.jpg')}}" alt="image" >
            <p class="text-gray-600">
                {{$lost->item_description}}
            </p>
    <div class="card flex flex-row justify-around bg-[#e4e4e4] rounded-[15px] shadow-[10px_10px_20px_#c4c4c4,-10px_-10px_20px_#ffffff] p-1">
        <button class="button flex flex-row justify-center items-center bg-[#e4e4e4] border-none rounded-[10px] shadow-inner shadow-[inset_5px_5px_5px_#c4c4c4,inset_-5px_-5px_5px_#ffffff] text-[#333] font-bold text-[13px] uppercase px-4 py-2 m-1 transition duration-200 hover:shadow-none">
            <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1">
                <g id="Layer_2" data-name="Layer 2">
                    <g id="icons_Q2" data-name="icons Q2">
                        <path d="M24,2A22,22,0,1,0,46,24,21.9,21.9,0,0,0,24,2ZM34.7,14.7,28,28,14.7,34.7a1.1,1.1,0,0,1-1.4-1.4L20,20l13.3-6.7A1.1,1.1,0,0,1,34.7,14.7ZM24,22a2,2,0,1,0,2,2A2,2,0,0,0,24,22Z"></path>
                    </g>
                </g>
            </svg>
            @if($lost->statut == "I LOST IT")

                <form action="/changeStatut/{{$lost->id}}"  class="text-[#3035cb] hover:bg-[#3035cb] hover:text-[#e4e4e4]"><button type="submit"  class="text-[#3035cb] hover:bg-[#3035cb] hover:text-[#e4e4e4]">I FOUND IT</button></form>
            @else
                <form action="/changeStatut/{{$lost->id}}"  class="text-[#3035cb] hover:bg-[#3035cb] hover:text-[#e4e4e4]"><button class="text-[#3035cb] hover:bg-[#3035cb] hover:text-[#e4e4e4]" type="submit">IT'IS MINE</button></form>

            @endif
        </button>

        <button class="w-32 h-10 rounded-full border-none bg-white flex items-center justify-center cursor-pointer transition-all duration-300 overflow-hidden shadow-lg hover:scale-95 active:scale-95 group" id="comment_button">
            <div class="w-[30px] h-[30px] bg-[#674ae4] rounded-full flex items-center justify-center overflow-hidden z-10 transition-all duration-300 group-hover:w-[120px] group-hover:rounded-full">
                <svg fill="white" viewBox="0 0 512 512" class="h-4">
                    <path d="M123.6 391.3c12.9-9.4 29.6-11.8 44.6-6.4c26.5 9.6 56.2 15.1 87.8 15.1c124.7 0 208-80.5 208-160s-83.3-160-208-160S48 160.5 48 240c0 32 12.4 62.8 35.7 89.2c8.6 9.7 12.8 22.5 11.8 35.5c-1.4 18.1-5.7 34.7-11.3 49.4c17-7.9 31.1-16.7 39.4-22.7zM21.2 431.9c1.8-2.7 3.5-5.4 5.1-8.1c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208s-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6c-15.1 6.6-32.3 12.6-50.1 16.1c-.8 .2-1.6 .3-2.4 .5c-4.4 .8-8.7 1.5-13.2 1.9c-.2 0-.5 .1-.7 .1c-5.1 .5-10.2 .8-15.3 .8c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4c4.1-4.2 7.8-8.7 11.3-13.5c1.7-2.3 3.3-4.6 4.8-6.9c.1-.2 .2-.3 .3-.5z"></path>
                </svg>
            </div>
            <p class="h-full w-[90px] flex items-center justify-center text-[#1a1a1a] z-10 transition-all duration-300 text-lg font-semibold group-hover:translate-x-2 group-hover:w-0 group-hover:text-[0px]">Comment</p>
        </button>

        <button class="button flex flex-row justify-center items-center bg-[#e4e4e4] border-none rounded-[10px] shadow-inner shadow-[inset_5px_5px_5px_#c4c4c4,inset_-5px_-5px_5px_#ffffff] text-[#b82323] font-bold text-[13px] uppercase px-4 py-2 m-1 transition duration-200 hover:shadow-none">
            <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1">
                <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -999.000000)">
                    <g id="icons" transform="translate(56.000000, 160.000000)">
                        <path d="M97.1784026,840.884344 C92.8882915,837.134592 86.2359857,839.256228 84.7592414,844.817545 C84.139128,847.151543 84.7373784,848.235292 84.7373784,849.987037 C84.7373784,851.787636 84,854.395812 84,854.395812 C84,854.714855 84.2832249,855.025921 84.6320386,854.935194 C85.8792217,854.609172 87.8627895,853.964107 90.2349218,854.608175 C98.2119249,856.770688 103.330841,846.261214 97.1784026,840.884344 M103.447113,859 C103.395437,859 103.341773,858.993021 103.287115,858.979063 C96.9806421,857.395812 97.4039887,859.174477 93.8999507,858.237288 C92.8395967,857.954137 91.8746446,857.443669 91.0418642,856.781655 C97.4059763,857.561316 102.710728,852.016948 101.771614,845.487535 C102.732591,846.487535 103.438169,847.72582 103.7363,849.11266 C104.584981,853.048852 102.430484,852.38285 103.983749,858.364905 C104.075176,858.714855 103.765119,859 103.447113,859"></path>
                    </g>
                </g>
            </svg>
            <span class="hover:bg-[#b82323] hover:text-[#e4e4e4]" id="chat_button">Chat</span>
        </button>
    </div>
            <form method="post" action="/addComment/{{$lost->id}}" class="bg-white border border-slate-200 grid grid-cols-6 gap-2 rounded-xl p-2 text-sm hidden" id="comment_form">
                @csrf
                <h1 class="text-center text-slate-200 text-xl font-bold col-span-6">Send Feedback</h1>

                    <button class="text-gray-400 hover:text-gray-300 transition-colors" id="close_comment_form">✕</button>
                <textarea name="comment" placeholder="Your feedback..." class="bg-slate-100 text-slate-600 h-28 placeholder:text-slate-600 placeholder:opacity-50 border border-slate-200 col-span-6 resize-none outline-none rounded-lg p-2 duration-300 focus:border-slate-600"></textarea>

                <span class="col-span-2"></span>
                <button type="submit" class="bg-slate-100 stroke-slate-600 border border-slate-200 col-span-2 flex justify-center rounded-lg p-2 duration-300 hover:border-slate-600 hover:text-white focus:stroke-blue-200 focus:bg-blue-400">
                    <svg fill="none" viewBox="0 0 24 24" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M7.39999 6.32003L15.89 3.49003C19.7 2.22003 21.77 4.30003 20.51 8.11003L17.68 16.6C15.78 22.31 12.66 22.31 10.76 16.6L9.91999 14.08L7.39999 13.24C1.68999 11.34 1.68999 8.23003 7.39999 6.32003Z"></path>
                        <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" d="M10.11 13.6501L13.69 10.0601"></path>
                    </svg>
                </button>

            </form>

            @foreach($comments as $comment)
                <div
                    id="toast-notification"
                    class="w-full p-4 text-gray-900 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-300"
                    role="alert"
                >
                    <div class="flex items-center mb-3">
    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white"
    >New comment</span
    >
                    </div>
                    <div class="flex items-center">
                        <div class="relative inline-block shrink-0">
                            <div
                                class="w-12 h-12 rounded-full bg-green-600 flex items-center justify-center text-white font-bold text-xl"
                            >
                                M
                            </div>
                            <span
                                class="absolute bottom-0 right-0 inline-flex items-center justify-center w-6 h-6 bg-blue-600 rounded-full"
                            >
        <svg
            class="w-3 h-3 text-white"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 18"
            fill="currentColor"
        >
          <path
              d="M18 4H16V9C16 10.0609 15.5786 11.0783 14.8284 11.8284C14.0783 12.5786 13.0609 13 12 13H9L6.846 14.615C7.17993 14.8628 7.58418 14.9977 8 15H11.667L15.4 17.8C15.5731 17.9298 15.7836 18 16 18C16.2652 18 16.5196 17.8946 16.7071 17.7071C16.8946 17.5196 17 17.2652 17 17V15H18C18.5304 15 19.0391 14.7893 19.4142 14.4142C19.7893 14.0391 20 13.5304 20 13V6C20 5.46957 19.7893 4.96086 19.4142 4.58579C19.0391 4.21071 18.5304 4 18 4Z"
              fill="currentColor"
          ></path>
          <path
              d="M12 0H2C1.46957 0 0.960859 0.210714 0.585786 0.585786C0.210714 0.960859 0 1.46957 0 2V9C0 9.53043 0.210714 10.0391 0.585786 10.4142C0.960859 10.7893 1.46957 11 2 11H3V13C3 13.1857 3.05171 13.3678 3.14935 13.5257C3.24698 13.6837 3.38668 13.8114 3.55279 13.8944C3.71889 13.9775 3.90484 14.0126 4.08981 13.996C4.27477 13.9793 4.45143 13.9114 4.6 13.8L8.333 11H12C12.5304 11 13.0391 10.7893 13.4142 10.4142C13.7893 10.0391 14 9.53043 14 9V2C14 1.46957 13.7893 0.960859 13.4142 0.585786C13.0391 0.210714 12.5304 0 12 0Z"
              fill="currentColor"
          ></path>
        </svg>
        <span class="sr-only">Message icon</span>
      </span>
                        </div>
                        <div class="ms-3 text-sm font-normal  ">
                            <div class="text-sm font-semibold text-gray-900 dark:text-white">
                                Manish Tamang
                            </div>
                            <div class="text-sm font-normal">{{$comment->comment}}</div>
                            <span class="text-xs font-medium text-blue-600 dark:text-blue-500"
                            >{{$comment->created_at}}</span
                            >
                        </div>
                    </div>
                </div>
            @endforeach
        </article>

        <div class="w-[300px] h-[320px] bg-slate-900 rounded-lg flex flex-col shadow-lg hidden position-absolute top-50 right-100 z-50"  id="chat_form">
            <!-- Header -->
            <div class="w-full h-10 flex items-center justify-between px-4 bg-slate-900/50">
                <span class="text-gray-400 text-sm">Chat</span>
                <button class="text-gray-400 hover:text-gray-300 transition-colors" id="close_chat_form">✕</button>
            </div>

            <!-- Messages Area -->
            <div class="w-full flex-1 space-y-1 p-2">
                <div class="w-full h-8 rounded bg-slate-800"></div>
                <div class="w-full h-8 rounded bg-slate-800/50"></div>
                <div class="w-full h-8 rounded bg-slate-800"></div>
                <div class="w-full h-8 rounded bg-slate-800/50"></div>
                <div class="w-full h-8 rounded bg-slate-800"></div>
                <div class="w-full h-8 rounded bg-slate-800/50"></div>
            </div>

            <!-- Input Area -->
            <div class="w-full p-3">
                <div class="flex items-center bg-slate-800 rounded-md">
                    <input type="text" placeholder="Send a message." class="flex-1 bg-transparent px-3 py-2 text-sm text-gray-300 placeholder-gray-500 outline-none">
                    <button class="px-3 py-2 text-gray-400 hover:text-gray-300 transition-colors">→</button>
                </div>
            </div>
        </div>

    </div>

    <!-- From Uiverse.io by shadowmurphy -->

</x-app-layout>
<script>
    document.getElementById('chat_button').addEventListener('click',function (){
        document.getElementById('chat_form').classList.toggle('hidden');
    })
    document.getElementById('close_chat_form').addEventListener('click',function (){
        document.getElementById('chat_form').classList.toggle('hidden');
    })
    document.getElementById('comment_button').addEventListener('click',function(){
        document.getElementById('comment_form').classList.toggle('hidden');
    })
    document.getElementById('close_comment_form').addEventListener('click',function (){
        document.getElementById('comment_form').classList.toggle('hidden');
    })

</script>
