@extends('layouts.app')
@section('content')

    <div class=" background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center ">

                <H1 class="sm:text-white text-5xl uppercase front-bold  text-shadow-md pb-14"> حاب تكون واحد من فريقنا ?
                </H1>

                <a href="/tech" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    اشترك معنا
                </a>


            </div>

        </div>

    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>

            <img class="rounded-xl shadow" src="https://cdn.pixabay.com/photo/2014/01/01/23/38/director-237412_1280.jpg"
                width="700" alt="">
        </div>
        <div class=" m-auto sm:m-auto text-right w-4/5 block">

            <h2 class="text-3xl font-extrabold text-gray-600 pt-10">وسمع مجالك معنا</h2>
            <p class="py-10 text-gray-500 text-s">

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, a. Doloribus error autem, doloremque
                culpa, pariatur quibusdam inventore architecto sed iste laborum dolore minima nisi totam modi natus, labore
                facere?
            </p>

            <p class=" font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi a dolorem, cupiditate quae odio similique
                fugiat consequuntur, sapiente accusantium minima quidem. Consequatur quaerat quis quam autem asperiores
                porro nulla quo.
            </p>

            <a href="/tech" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                اعرف اكثر
            </a>
        </div>


    </div>
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            whats your .....

        </h2>

        <span class="font-exrabold block text-4xl py-1"> light</span>
        <span class="font-exrabold block text-4xl py-1"> Sound</span>
        <span class="font-exrabold block text-4xl py-1"> Camera</span>
        <span class="font-exrabold block text-4xl py-1"> Dop</span>
    </div>

    <div class=" text-center py-15">
        <span class=" uppercase text-s text-gray-400">Blog

        </span>
        <h2 class=" text-4xl font-bold py-10">
            Recent posts


        </h2>

        <p class=" m-auto w-4/5 text-gray-400">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum non corporis et natus hic quos sint quod quae
            illum. Soluta, autem mollitia facere quis aliquam beatae qui veritatis explicabo rerum.

        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-14 pb-16 sm:m-auto w-4/5 block">
<span class=" uppercase text-xs">  
    lighting
</span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis voluptate molestiae eveniet
                    distinctio placeat accusamus odit voluptates provident eaque praesentium fugiat vitae, magni iure quis
                    magnam omnis mollitia sunt? Facere.
                </h3>
                <a href="" class=" uppercase bg-transparent border-2 border-gray-100 text-gray-100
    text-xs font-extrabold py-3 px-5 rounded-3xl"> Find out more
                </a>
            </div>

        </div>
        <div>

            <img  src="https://cdn.pixabay.com/photo/2014/06/25/00/39/occur-376803_1280.jpg" width="700" 
                alt="">
        </div>
        
    </div>
@endsection
