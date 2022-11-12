<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kaweb test</title>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        
        {{-- Custom utils --}}
        <style>

            .pointer{
                cursor: pointer;
            }
           
            .pws-gradient-animation {
                    
                    background: linear-gradient(
                        -45deg,
                        /*Kaweb colours from site*/
                        #f4bd40,
                        #6f62e8,
                        #fd918f

                    );
                    background-size: 400% 400%;
                    animation: pws_gradient 15s ease infinite;
                    
                    
                }

                @keyframes pws_gradient {
                    0% {
                        background-position: 0% 50%;
                    }
                    50% {
                        background-position: 100% 50%;
                    }
                    100% {
                        background-position: 0% 50%;
                    }
                }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url("data:image/svg+xml,<svg id='patternId' width='100%' height='100%' xmlns='http://www.w3.org/2000/svg'><defs><pattern id='a' patternUnits='userSpaceOnUse' width='29' height='50.115' patternTransform='scale(1) rotate(0)'><rect x='0' y='0' width='100%' height='100%' fill='hsla(0,0%,100%,1)'/><path d='M14.498 16.858L0 8.488.002-8.257l14.5-8.374L29-8.26l-.002 16.745zm0 50.06L0 58.548l.002-16.745 14.5-8.373L29 41.8l-.002 16.744zM28.996 41.8l-14.498-8.37.002-16.744L29 8.312l14.498 8.37-.002 16.745zm-29 0l-14.498-8.37.002-16.744L0 8.312l14.498 8.37-.002 16.745z'  stroke-width='0.5' stroke='hsla(0, 0%, 0%, 1)' fill='none'/></pattern></defs><rect width='800%' height='800%' transform='translate(-22,-14.23)' fill='url(%23a)'/></svg>")      
            }

            .main-container{
                opacity: 0.97;
            }

            .widget-form__container{
                display: flex;
                flex-direction: column;
                align-items: center;
                background: rgba(255,255,255, 0.92 );
                padding: 30px;
            }            

            .widget-form__image{
                width: 50px;
            }            

            .widget-form{
                display: flex;
                flex-direction: column;
                text-align: center;
                width: 100%;
                height: 100%;
                padding: 30px;
            }

            .widget-form__input{
                margin: 5px 0;
            }

            .widget-form__input:nth-of-type(2){
                border: 1px solid #000;
                border-radius: 5px;
                padding: 10px;
            }

            .widget-form__input:nth-of-type(3){
                border: 1px solid #000;
                border-radius: 5px;
                padding: 10px;
            }

            .widget-form__heading{
                font-weight: bold;
                display: inline;
                text-align: center;
            }

            .widget-form__response-heading{
                
            }


        </style>

        <script>
            window.onload = () => {
                let form = document.querySelector(".widget-form");
                console.log(form)
                form.onsubmit = (e) => {
                    // No need for this in test spec, but this was giving some weird behaviour on laragon -- ajax output different to loaded output. Revisit this, wd be good to know why
                    // e.preventDefault();
                    // let url = e.currentTarget.action;

                    // console.log("bruh")
                    // console.log(e.currentTarget._token.value)
                    // //alert("Hmm")

                    // axios.post(url, {
                    //      'qty': e.currentTarget.widget_qty,
                    //      '_token': e.currentTarget._token.value
                    // })
                    // .then(function (response) {
                    //     console.log("Ajax response")
                    //     console.log(response.data);
                    // })
                    // .catch(function (error) {
                    //     console.log(error);
                    // });


                }


           
            }
        </script>
    </head>
    <body>
        <main class="main-container pws-gradient-animation relative flex justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">             

            <div class="widget-form__container  ">  
                        
                @if($errors)
                    <div>
                        @foreach($errors as $e)
                            {{ $e }}
                        @endforeach
                    </div>
                @endif      

                
                
                <img class="widget-form__image" src="{{url('/widget-icon.png')}}" />
                <h1 class="widget-form__heading">Widget wrangler</h1>
                
                <form class="widget-form" action="{{route('calculate_widgets')}}" method="POST">
                    @csrf
                    <label for="widget_qty">Input required widget quantity:</label>
                    <input class = "widget-form__input" id="widget_qty" type="number" min="1" step="1" name="qty" placeholder="Whole numbers only">
                    <input class="widget-form__input pointer" type="submit" value="calculate">
                </form>
                
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                      
                        <h2 class="widget-form__response-heading">Packs selected</h2> 
                    
                        <?php
                            $data = json_decode(\Session::get('success'));
                            $packs = array_count_values($data->packs_selected);                            
                        ?>
                        <ul>
                            @foreach($packs as $p => $qty)
                                <li>{{ $p }} pack: {{ $qty }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                
            </div>
           
        </main>
    </body>
</html>
