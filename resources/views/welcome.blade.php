<x-guest-layout>
    <section class="text-center p-5 bg-stone-100" id="meme">
        <div class="h-96 w-full flex flex-row gap-0">
        <div class="w-full lg:w-1/2 h-full flex flex-col justify-center items-center">
        <h1 class="text-xl lg:text-3xl font-bold">Bug tracking just got easier.</h1>
        <p class="text-sm lg:text-lg">Streamline your workflow with our bug tracking web app.</p>
        <a href="/register">
            <button class="text-md lg:text-xl lg:px-5 py-2 bg-blue-500 w-40 lg:w-60 mx-auto mt-5 shadow-md rounded-xl">Get Started</button>
        </a>
        </div>
            <div class="mt-5 relative h-96 hidden lg:inline lg:w-1/2">
                <img src="/heroImage.svg" class="h-96 mt-1 hidden lg:inline"/>
            </div>
        </div>
    </section>
    <section class="text-center p-5 bg-sky-200" id="about-us">
        <h1 class="my-10 text-3xl font-bold">Who We Are</h1>
        <p class="text-xl w-full lg:w-3/5 m-auto">
            At Gubber, we aim to provide value to developers by providing digital solutions to make their lives easier.
            Our digital utilities aim to quicken your workflow, meaning you can focus on shipping products faster, quicker,
            and with less hassle. <br/><br/>
            Just because it's technical, doesn't mean it has to be complicated.

        </p>
    </section>
    <section class="text-center bg-sky-200 p-5" id="pricing">
        <h1 class="my-10 text-3xl font-bold">Pricing</h1>
        <p class="text-xl">Our bug tracker is currently <strong>free!</strong> You don't need to pay anything.</p>
    </section>
    <section class="text-center flex flex-col items-center p-5 bg-sky-200" id="contact">
        <h1 class="my-10 text-3xl font-bold">Contact Us</h1>
        <p class="text-sm lg:text-xl">Queries? Problems? Let us know, and we'll get back to you as soon as possible.</p>
        <form action="" class="mt-5 flex flex-col m-auto gap-4 w-full lg:w-2/5">
            <label for="name" class="flex flex-row gap-4 items-center w-full">
                <span class="font-bold">Name:</span>
                <input type="text" class="border-gray-300 rounded-xl w-full shadow-md" name="name" required/>
            </label>
            <label for="email" class="flex flex-row gap-4 items-center">
                <span class="font-bold">Email:</span>
                <input type="email" class="border-gray-300 rounded-xl w-full shadow-md" name="email" required/>
            </label>
            <label for="message" class="flex flex-col gap-4 items-center">
                <span class="font-bold">Message:</span>
                <textarea type="email" class="border-gray-300 rounded-xl w-full shadow-md" rows="5" name="email" required></textarea>
            </label>
            <button type="submit">Submit</button>
        </form>
    </section>
</x-guest-layout>