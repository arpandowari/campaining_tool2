<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
 
  <?php
  include("headlink.php")
  ?>
  <style>
    .scrollbar-hide {
      -ms-overflow-style: none !important;
      /* IE and Edge */
      scrollbar-width: none !important;
      /* Firefox */
    }

    .scrollbar-hide::-webkit-scrollbar {
      display: none !important;
      /* Chrome, Safari, Opera */
    }

    a {
      text-decoration: none;
    }

    .gradient-color {
      background: #075E54;
      background: linear-gradient(90deg, rgba(7, 94, 84, 1) 0%, rgba(63, 207, 142, 0) 10%, rgba(255, 255, 255, 0) 88%, rgba(126, 169, 164, 1) 100%, rgba(7, 94, 84, 1) 100%);
    }

    .overlay-background {
      background: #FDFBFB;
      background: linear-gradient(90deg, rgba(253, 251, 251, 0) 22%, rgba(254, 253, 253, 0.24) 59%, rgba(255, 255, 255, 1) 100%);
    }
  </style>


  <!-- ✅ Load custom fonts (optional) -->
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
</head>

<body class="bg-lightBg text-black dark:bg-darkBg dark:text-white transition-colors duration-300 ">



  <!-- ===========kaif=================== -->

  <?php
  include("nevbar.php")
  ?>


  <section class="hero section flex justify-center items-center py-8 sm:py-16 px-2 sm:px-4">
    <div class="main w-full max-w-4xl text-center flex flex-col items-center gap-y-6 ">

      <!-- Top Text -->
      <p 
      data-aos="zoom-out"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
      class="text-[12px] sm:text-[14px] ">Meta Tech Partner · Powered by official WhatsApp API</p>

      <!-- Main Heading -->
      <h1 
      data-aos="zoom-out"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
      class="text-2xl sm:text-4xl lg:text-6xl font-bold leading-snug overflow-hidden" data-aos="zoom-out">
        Do smart work with <br>
        <span 
        data-aos="zoom-out"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
        class="text-[#075E54]">the power of WhatsApp</span>
      </h1>

      <!-- Paragraph 1 -->
      <p 
      data-aos="zoom-out"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
      class="text-[14px] sm:text-[16px] text-gray-700 dark:text-gray-300 max-w-3xl">
        Broadcast, Automate, Engage, Sell - Do Everything with the Smartest WhatsApp Engagement Platform.
      </p>

      <!-- Paragraph 2 -->
      <p 
      data-aos="zoom-out"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
      class="text-[14px] sm:text-[16px] text-gray-700 dark:text-gray-300 max-w-2xl">
        Sell more with personalised communication on WhatsApp. Automate marketing, sales, service and support by
        WhatsApp Business API.
      </p>

      <!-- Hero Button Group -->
      <div class="hero-button-grp flex flex-col items-center gap-3 mt-4 overflow-hidden">
        <span 
        data-aos="zoom-out"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
        class="text-[12px] sm:text-[14px] font-medium">Powered by Official WhatsApp APIs ⚡</span>

        <div class="btns flex flex-col sm:flex-row gap-3 mt-3 sm:mt-0 overflow-hidden" data-aos="zoom-out-left">
          <button 
          data-aos="fade-left"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
          class="bg-[#075E54] py-2 px-6 text-[13px] sm:text-[15px] text-white rounded-[7px] font-[500]">
            Start your project
          </button>
          <button 
          data-aos="fade-right"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
          class="bg-black py-2 px-6 text-[13px] sm:text-[15px] text-white rounded-[7px] font-[500]">
            Request a demo
          </button>
        </div>
      </div>

      <!-- Small Note -->
      <p
      data-aos="zoom-out"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
      class="text-[12px] sm:text-[14px] text-gray-700 dark:text-gray-300 max-w-2xl">
        No credit card required · Cancel anytime. Free for 7 days
      </p>

      <!-- Images (Logo Row) -->
      <div 
      data-aos="fade-up"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
      class=" w-[100%] sm:w-[70%] gradient-color  flex items-center justify-around">
        <img src="./assets/img/Image [h-12] (1).svg" alt="" class="w-[14%]  ">
        <img src="./assets/img/Image [h-12] (2).svg" alt="" class="w-[14%]">
        <img src="./assets/img/Image [h-12] (3).svg" alt="" class="w-[14%]">
        <img src="./assets/img/Image [h-12] (4).svg" alt="" class="w-[14%]">
        <img src="./assets/img/Image [h-12].svg" alt="" class="w-[14%]">
      </div>

      <!-- Trusted Text -->
      <p 
      data-aos="zoom-out"
    data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="1000"
     class="text-[12px] sm:text-[14px] text-gray-700 dark:text-gray-300 max-w-2xl mt-4">
        Trusted by fast-growing companies worldwide
      </p>

    </div>
  </section>

  <section class="section py-8 sm:py-16 px-2 sm:px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

      <!-- First item -->
      <div
        data-aos-easing="linear"
        data-aos-duration="1000"
        data-aos="zoom-in-up" class="col1 bg-[#075E54] text-white h-80 md:col-span-2 flex p-5 justify-between rounded-lg">
        <div class="left w-[60%] flex flex-col justify-between">
          <div class="top">
            <h3><span><i class="ri-bar-chart-horizontal-fill"></i></span> Whatsapp Automation</h3>
            <p class="text-[14px] font-[300] mt-3">
              Automate WhatsApp messages for leads, reminders, and campaigns.
            </p>
          </div>
          <div class="bottom">
            <p class="text-[15px] flex items-center gap-2">
              <i class="ri-check-line text-[20px]"></i> <span>24/7 Availability</span>
            </p>
            <p class="text-[15px] flex items-center gap-2">
              <i class="ri-check-line text-[20px]"></i> <span>Smart Triggers</span>
            </p>
            <p class="text-[15px] flex items-center gap-2">
              <i class="ri-check-line text-[20px]"></i> <span>Bulk Messaging</span>
            </p>
          </div>
        </div>
        <div class="right flex items-center w-[40%] overflow-hidden ">
          <img src="./assets/img/elephant.svg" alt="" class=" object-fill">
        </div>
      </div>

      <!-- Second item -->
      <div
        data-aos-easing="linear"
        data-aos-duration="1000"
        data-aos="zoom-in-up" class="col3 p-5 bg-[#075E54] text-white h-80 flex flex-col justify-between rounded-lg">
        <div class="top">
          <h3><span><i class="ri-lock-star-fill text-white"></i></span> Whatsapp Automation</h3>
          <p class="text-[14px] font-[300] mt-3">
            Manage contact lists, segment users, and control campaigns easily.
          </p>
        </div>
        <div class="bottom grid grid-cols-2 gap-2">
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]">campaigningtool.com</div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]">alex160198</div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]"><span class="blur-sm">alex160198</span></div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]"><span class="blur-sm">alex160198</span></div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]">abc@gmail.com</div>
          <div class="border-2 py-3 text-[10px] text-center rounded-[8px]">momester300</div>
        </div>
      </div>

      <!-- Third item -->
      <div
        data-aos-easing="linear"
        data-aos-duration="1000"
        data-aos="zoom-in-up" class="col4 p-5 bg-[#075E54] text-white h-80 relative overflow-hidden rounded-lg">
        <h3 class="flex gap-2">
          <img src="./assets/img/smartcamp.png" alt="">Smart Campaigns
        </h3>
        <p class="text-[14px] font-[300] mt-3">
          Launch intelligent campaigns with scheduling and branching conditions.
        </p>
        <p class="text-[13px] font-[300] md:mt-2">"Schedule" → "Conditions" → "Send message"</p>
        <div class="center w-full flex justify-center mt-3 lg:mt-2">
          <span class="border-2 rounded-3xl px-5 py-0.5 text-[15px] text-black ">Campaigning Tool</span>
        </div>
        <div class="absolute -bottom-32 right-0 sm:top-12 w-full xl:top-3 overflow-hidden">
          <img src="./assets/img/glove.svg" alt="" class="w-full">
        </div>
      </div>

      <!-- Fourth item -->
      <div
        data-aos-easing="linear"
        data-aos-duration="1000"
        data-aos="zoom-in-up" class="col5 p-5 bg-[#075E54] text-white h-80 flex justify-between flex-col gap-4 rounded-lg">
        <div class="top overflow-hidden">
          <h3><span><i class="ri-book-shelf-line"></i></span> Media Library</h3>
          <p class="text-[14px] font-[300] mt-3">
            Store and send media images, videos, and PDFs with campaigns.
          </p>
        </div>
        <div class="bottom grid grid-cols-4 gap-2">
          <img src="./assets/img/img-vid.svg" alt="" class="h-[90%]">
          <img src="./assets/img/img-vid.svg" alt="" class="h-[90%]">
          <img src="./assets/img/img-vid.svg" alt="" class="h-[90%]">
          <img src="./assets/img/img-vid.svg" alt="" class="h-[90%]">
        </div>
      </div>

      <!-- Fifth item -->
      <div
        data-aos-easing="linear"
        data-aos-duration="1000"
        data-aos="zoom-in-up" class="col6 p-5 bg-[#075E54] text-black h-80 relative overflow-hidden rounded-lg">
        <div class="absolute inset-0 z-10 bg-gradient-to-t from-transparent via-white/20 to-white"></div>
        <img src="./assets/img/Clip path group.png" alt="" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="relative z-20">
          <h3 class="text-xl flex items-center gap-2">
            <span><i class="ri-timer-flash-line text-2xl"></i></span> Real-time Analytics
          </h3>
          <p class="text-[14px] font-[300] mt-3">
            Track open rates, clicks, and user engagement in real time.
          </p>
        </div>
        <img src="./assets/img/arrow.svg" alt="" class="absolute bottom-16 left-20 z-20">
        <img src="./assets/img/button.png" alt="" class="absolute bottom-20 right-28 z-20">
      </div>

      <!-- Sixth item -->
      <div data-aos="zoom-in-up"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="col7 p-5 bg-[#075E54] text-white h-80 relative overflow-hidden rounded-lg flex justify-between flex-col">
        <div class="top">
          <h3 class="flex gap-2">
            <img src="./assets/img/ai_reply.svg" alt="">Smart Campaigns
          </h3>
          <p class="text-[14px] font-[300] mt-3">
            Use AI to auto-suggest responses and save time.
          </p>
        </div>
        <div class="bottom z-20">
          <h3 class="flex gap-2 font-[300]">
            <img src="./assets/img/gpt.svg" alt="">OpenAI
          </h3>
          <h3 class="flex gap-2 font-[300] mt-2">
            <img src="./assets/img/sure_let_me_check.svg" alt="">“Sure, let me check...”
          </h3>
        </div>
        <img src="./assets/img/cube1.svg" class="absolute w-full h-full z-0" alt="">
      </div>
      <div
        data-aos-easing="linear"
        data-aos-duration="1000"
        data-aos="zoom-in-up" class="p-6 bg-[#075E54] text-white rounded-lg h-80  relative overflow-hidden">
        <!-- Heading -->
        <h3 class="flex items-center gap-2 text-lg font-light mb-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
          </svg>
          Data APIs
        </h3>

        <!-- Paragraph -->
        <p class="text-sm font-light mb-6">
          Connect WhatsApp automation into your backend via secure RESTful APIs.
        </p>

        <!-- Buttons Section -->
        <div class="flex flex-col gap-4">
          <!-- Row 1 -->
          <div class="flex items-center gap-4">
            <button class="flex items-center gap-2 text-white text-xs py-2 px-3 rounded-md border-2">
              <i class="ri-building-line"></i> countries
            </button>
            <button class="flex items-center gap-2 bg-white text-[#075E54] text-xs py-2 px-3 rounded-full">
              countries
            </button>
          </div>

          <!-- Row 2 -->
          <div class="flex items-center gap-4">
            <button class="flex items-center gap-2 text-white text-xs py-2 px-3 rounded-md border-2">
              <i class="ri-building-line"></i> continents
            </button>
            <button class="flex items-center gap-2 bg-white text-[#075E54] text-xs py-2 px-3 rounded-full">
              continents
            </button>
          </div>

          <!-- Row 3 -->
          <div class="flex items-center gap-4">
            <button class="flex items-center gap-2 text-white text-xs py-2 px-3 rounded-md border-2">
              <i class="ri-building-line"></i> cities
            </button>
            <button class="flex items-center gap-2 bg-white text-[#075E54] text-xs py-2 px-3 rounded-full">
              cities
            </button>
          </div>

          <!-- Row 4 -->
          <div class="flex items-center gap-4">
            <button class="flex items-center gap-2  text-white text-xs py-2 px-3 rounded-md border-2">
              <i class="ri-building-line"></i> states
            </button>
            <button class="flex items-center gap-2 bg-white text-[#075E54] text-xs py-2 px-3 rounded-full">
              states
            </button>
          </div>

          <!-- Row 5 -->

        </div>
      </div>

    </div>
  </section>
  <section class="px-[50px]">
    <div class="text-white flex justify-center items-center flex-col gap-4 py-[2rem]">
      <p 
      data-aos="zoom-out"
        data-aos-easing="linear"
        data-aos-duration="1000"
      class="text-black font-bold text-[1.5rem] md:text-[35.2px]">Start building in seconds</p>
      <p 
      data-aos="zoom-out"
        data-aos-easing="linear"
        data-aos-duration="1000"
      class="text-black text-[10px] text-center md:text-[15px]">Kickstart your next project with templates built by us and our community.</p>
      <div class="flex justify-center items-center gap-2 my-3">

        <button 
         data-aos="fade-left"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="bg-[#075E54] rounded-[5px] p-2 md:text-[13.2px] text-[10px] font-bold"> View all examples</button>
        <button 
         data-aos="fade-right"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class=" flex justify-center items-center  gap-2 md:text-[13.2px] text-[10px] font-bold bg-[#075E54] rounded-[5px] p-2"><img src="image/githibicon.png" alt=""><span>Official GitHub library</span></button>
      </div>
    </div>
    <div class="text-white flex justify-center items-center gap-4 flex-wrap">
      <div
        data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="w-[352.44px] h-[300.15px] bg-[#075E54] rounded-[.8rem]">
        <div class="flex gap-3 md:py-[2rem] py-[1rem] justify-center items-center">
          <!-- <img src="image/Vector (1).png" alt="" class="w-[40px] h-[40px]"> -->
          <i class="ri-nextjs-fill" style="font-size:3rem"></i>
          <img src="image/Vector (2).png" alt="" class="w-[40px] h-[40px]">
          <!-- <img src="image/triangle.png" alt=""  class="w-[40px] h-[40px]"> -->
          <i class="ri-triangle-fill" style="font-size:2.7rem"></i>
        </div>
        <hr>
        <div class="py-[1rem] flex gap-2 flex-col px-4 mt-2">
          <p class="text-[17px]">Stripe Subscriptions Starter</p>

          <p class="text-[13.2px]">The all-in-one subscription starter kit for high- performance SaaS applications, powered by Stripe, Supabase, and Vercel. </p>
          <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
        </div>
      </div>
      <div
        data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="w-[352.44px] h-[300.15px] bg-[#075E54] rounded-[.8rem]">
        <div class="flex gap-3 md:py-[2rem] py-[1rem] justify-center items-center">
          <i class="ri-nextjs-fill" style="font-size:3rem"></i>
          <i class="ri-triangle-fill" style="font-size:2.7rem"></i>
        </div>
        <hr>
        <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
          <p class="text-[17px]">Next.js Starter</p>
          <p class="text-[13.2px]"> A Next.js App Router template configured with cookie-based auth using Supabase, TypeScript and Tailwind CSS.
          </p>
          <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
        </div>
      </div>
      <div
        data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="w-[352.44px] h-[300.15px] bg-[#075E54] rounded-[.8rem]">
        <div class="flex gap-3 md:py-[2rem] py-[1rem] justify-center items-center">

          <i class="ri-nextjs-fill" style="font-size:3rem"></i>
          <i class="ri-openai-fill" style="font-size:3rem"></i>
          <i class="ri-triangle-fill" style="font-size:2.7rem"></i>
        </div>
        <hr>
        <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
          <p class="text-[17px]">AI Chatbot</p>
          <p class="text-[13.2px]"> An open-source AI chatbot app template built with Next.js, the Vercel AI SDK, OpenAI, and Supabase.

          </p>
          <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
        </div>
      </div>
      <div
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="w-[352.44px] h-[300.15px] bg-[#075E54] rounded-[.8rem]">
        <div class="flex gap-3 md:py-[2rem] py-[1rem] justify-center items-center">
          <img src="image/bird.png" alt="" class="w-[40px] h-[40px]">
          <i class="ri-nextjs-fill" style="font-size:3rem"></i>

        </div>
        <hr>
        <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
          <p class="text-[17px]">LangChain + Next.js Starter</p>
          <p class="text-[13.2px]"> Starter template and example use-cases for LangChain projects in Next.js, including chat, agents, and retrieval.
          </p>
          <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
        </div>
      </div>
      <div
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="w-[352.44px] h-[300.15px] bg-[#075E54] rounded-[.8rem]">
        <div class="flex gap-3 md:py-[1.7rem] py-[1.2rem] justify-center items-center">
          <!-- <img src="image/flutter.png" alt="" class="w-[40px] h-[40px]"> -->
          <i class="ri-flutter-fill" style="font-size:2.5rem"></i>

        </div>
        <hr>
        <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
          <p class="text-[17px]">Flutter User Management</p>
          <p class="text-[13.2px]"> Get started with Supabase and Flutter by building a user management app with auth, file storage, and database.
          </p>
          <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
        </div>
      </div>
      <div
        data-aos="fade-up"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="w-[352.44px] h-[300.15px] bg-[#075E54] rounded-[.8rem]">
        <div class="flex gap-3 py-[2rem] justify-center items-center">
          <img src="image/vector.png" alt="" class="w-[40px] h-[40px]">
        </div>
        <hr>
        <div class="py-[1rem] flex gap-4 flex-col px-4 mt-2">
          <p class="text-[17px]">Expo React Native Starter</p>
          <p class="text-[13.2px]">An extended version of create-t3-turbo implementing authentication on both the web and mobile applications.
          </p>
          <div class="flex gap-2 justify-start items-center mt-3"><span class="text-[12px]"> View Template</span><i class="ri-arrow-right-up-line"></i></div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="flex justify-center items-center flex-col md:gap-5 gap-2 my-[2rem] ">
      <div class="flex justify-center items-center flex-col">

        <p
          data-aos="zoom-out"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class="md:text-[34.2px] text-[1.3rem]">Stay productive and manage your app</p>
        <p
          data-aos="zoom-out"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class="md:text-[34.2px] text-[1.3rem]"> without leaving the dashboard</p>
      </div>
      <div class="overflow-hidden">
        <button
          data-aos="fade-left"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class="bg-[#075E54] rounded-[1rem] px-5 py-1 text-white md:text-[13px] text-[10px]">Table Editor</button>
        <button
          data-aos="zoom-in"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class="bg-[#075E54] rounded-[1rem] px-5 py-1 text-white md:text-[13px] text-[10px]">SQL Editor</button>
        <button
          data-aos="fade-right"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class="bg-[#075E54] rounded-[1rem] px-5 py-1 text-white md:text-[13px] text-[10px]">RLS Policies</button>
      </div>
      <div class="flex justify-center items-center md:gap-3  mt-3 flex-wrap">
        <div
          data-aos="fade-up"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class=" flex gap-1 text-[#075E54] justify-center items-center w-[100px]">
          <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Full CRUD</span>
        </div>
        <div
          data-aos="fade-up"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class=" flex gap-1 text-[#075E54] justify-center items-center w-[150px]">
          <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Materialized Views</span>
        </div>
        <div
          data-aos="fade-up"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class=" flex gap-1 text-[#075E54] justify-center items-center w-[150px]">
          <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Foreign Tables</span>
        </div>
        <div
          data-aos="fade-up"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class=" flex gap-1 text-[#075E54] justify-center items-center w-[150px]">
          <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Partitioned Tables</span>
        </div>
        <div
          data-aos="fade-up"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class=" flex gap-1 text-[#075E54] justify-center items-center w-[200px]">
          <i class="ri-check-line"></i><span class="md:text-[13px] text-[10px]">Easy as a spreadsheet</span>
        </div>

      </div>
    </div>
    <div
      data-aos="zoom-in"
      data-aos-easing="linear"
      data-aos-duration="1000"
      class="flex justify-center items-center">
      <img src="image/apiimage.png" class="w-[75%]" alt="">
    </div>
  </section>
  <section class="">
    <div class="flex flex-col justify-center items-center gap-2 md:gap-5 mb-3 mt-3 overflow-hidden">
      <p
        data-aos="zoom-out"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="text-[1.5rem] font-bold md:text-[32px]  ">Join the community</p>
      <p
        data-aos="zoom-out"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="md:text-[16px] text-[10px]">Discover what our co mmunity has to say about their Supabase experience.</p>
      <div class="flex gap-2">
        <button
          data-aos="fade-left"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class="bg-black flex p-2 rounded-[9px] text-white gap-2 font-bold">GitHub discussions <img src="image/githubicon.png" alt=""></button>
        <button
          data-aos="fade-right"
          data-aos-easing="linear"
          data-aos-duration="1000"
          class="bg-black flex p-2 rounded-[9px] text-white gap-2 font-bold">Discord <img src="image/githubicon.png" alt=""></button>
      </div>
    </div>
    <div
    data-aos="zoom-in"
        data-aos-easing="linear"
        data-aos-duration="1000"
    class="bg-white p-6 scrollbar-hide h-[600px]">

      <div class="overflow-x-auto  scrollbar-hide ">
        <div class="flex flex-nowrap gap-6" style="height: 524px;">
          <!-- Container has fixed height for 3 rows visually -->

          <!-- Inner column container -->


          <!-- Another column -->
          <div class="flex flex-col gap-6">
            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <!-- <div class="w-8 h-8 bg-gray-400 rounded-full"></div> -->
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">
                <span>@secondcoluser</span>
              </div>
              <p class="text-sm">
                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur molestiae eaque, reiciendis autem et distinctio veritatis minus iure perferendis iste.
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@secondcoluser2</span>
              </div>
              <p class="text-sm">
                "Shorter card."
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@secondcoluser3</span>
              </div>
              <p class="text-sm">
                "Another card content."
                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur molestiae eaque, reiciendis autem et distinctio veritatis minus iure perferendis iste.
              </p>
            </div>
          </div>
          <div class="flex flex-col gap-6">
            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">


                <span>@thatguy_tex</span>
              </div>
              <p class="text-sm">
                "Working with @supabase has been one of the best dev experiences..."
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@justinjn0dev</span>
              </div>
              <p class="text-sm">
                "Short text card example."Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, illum modi totam libero nulla corporis recusandae aliquid fugit natus provident voluptates magni obcaecati, dolorum, numquam minus quae harum cumque veniam!
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@anotheruser</span>
              </div>
              <p class="text-sm">
                "Another card text."
              </p>
            </div>
          </div>

          <!-- Another column -->
          <div class="flex flex-col gap-6">
            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@secondcoluser</span>
              </div>
              <p class="text-sm">
                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, nostrum.
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@secondcoluser2</span>
              </div>
              <p class="text-sm">
                "Shorter card."
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit suscipit veniam, laborum ut quidem quae.
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@secondcoluser3</span>
              </div>
              <p class="text-sm">
                "Another card content."
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed maxime temporibus nam et commodi consectetur nemo reprehenderit quisquam velit,
                eligendi obcaecati. Magnam ullam repudiandae exercitationem?
              </p>
            </div>
          </div>
          <div class="flex flex-col gap-6">
            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@thatguy_tex</span>
              </div>
              <p class="text-sm">
                "Working with @supabase has been one of the best dev experiences..."
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@justinjn0dev</span>
              </div>
              <p class="text-sm">
                "Short text card example."
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias doloremque praesentium molestiae eos reiciendis accusamus obcaecati at sequi dicta tempora?
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@anotheruser</span>
              </div>
              <p class="text-sm">
                "Another card text."
              </p>
            </div>
          </div>

          <!-- Another column -->


          <!-- Another column -->
          <div class="flex flex-col gap-6">
            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@secondcoluser</span>
              </div>
              <p class="text-sm">
                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                "This card has a very very very very long text to test independent height behavior. It will grow bigger but other cards remain same!"
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur molestiae eaque, reiciendis autem et distinctio veritatis minus iure perferendis iste.
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@secondcoluser2</span>
              </div>
              <p class="text-sm">
                "Shorter card."
              </p>
            </div>

            <!-- Card -->
            <div class="bg-teal-800 p-4 rounded-xl text-white w-80 relative">
              <button class="absolute top-2 right-2 text-white text-xl"></button>
              <div class="flex items-center gap-2 mb-4">
                <img class="w-8 h-8 bg-gray-400 rounded-full" src="image/Image.png" alt="">

                <span>@secondcoluser3</span>
              </div>
              <p class="text-sm">
                "Another card content."
              </p>
            </div>
          </div>

          <!-- Keep adding more columns like above -->
        </div>
      </div>

    </div>
  </section>
  <section
    class=" flex justify-center items-center py-[4rem]">
    <div class="flex justify-center items-center flex-col gap-[1.5rem]">

      <p 
      data-aos="zoom-out"
        data-aos-easing="linear"
        data-aos-duration="1000"
      class="mdtext-[35px] text-[1.5rem] font-bold text-center">Build in a weekend,scale to millions</p>
      <div class="flex gap-2">
        <button 
         data-aos="fade-left"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="md:text-[13px ] text-[10px] bg-[#075E54] rounded-[6px] border-[#075E54] p-3 text-white font-bold">Start your project</button>
        <button 
         data-aos="fade-right"
        data-aos-easing="linear"
        data-aos-duration="1000"
        class="text-black border border-black rounded-[6px] p-3 md:text-[13px ] text-[10px] font-bold">Request a demo</button>
      </div>
    </div>
  </section>



  <?php
  include("footer.php")
  ?>



</body>

</html>