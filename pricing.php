<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    include("headlink.php")
    ?>

    <title>Subscription Plans</title>
</head>

<body>
    <?php
    include("nevbar.php")
    ?>
    <main class="flex-1 flex flex-col items-center justify-center py-12 px-4 bg-white">
        <div class="max-w-3xl mx-auto text-center mb-8">
            <p
                data-aos="zoom-out"
                data-aos-anchor="#example-anchor"
                data-aos-offset="500"
                data-aos-duration="1000"
                class="text-[#075E54] font-semibold tracking-widest mb-2">PRICING</p>
            <h2
                data-aos="zoom-out"
                data-aos-anchor="#example-anchor"
                data-aos-offset="500"
                data-aos-duration="1000"
                class="text-4xl font-extrabold text-gray-900 mb-4">Our pricing plans</h2>
            <p
                data-aos="zoom-out"
                data-aos-anchor="#example-anchor"
                data-aos-offset="500"
                data-aos-duration="1000"
                class="text-gray-500 mb-6">Choose the plan that works best for your business needs</p>
            <div class="flex flex-col items-center">
                <span
                    data-aos="zoom-out"
                    data-aos-anchor="#example-anchor"
                    data-aos-offset="500"
                    data-aos-duration="1000"
                    class="mb-2 text-gray-700">Choose your currency</span>
                <div class="relative inline-block text-left" id="currency-selector">
                    <!-- Button -->
                    <button
                        id="selected-currency"
                        onclick="toggleCurrencyDropdown()"
                        class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none">
                        <span class="flex items-center gap-2">
                            <img id="selected-flag" src="https://hatscripts.github.io/circle-flags/flags/in.svg" alt="INR" class="w-5 h-5">
                            <span id="selected-text">INR</span>
                        </span>
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div
                        id="currency-dropdown"
                        class="origin-top-right absolute right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-10 hidden">
                        <div class="py-1">
                            <a href="#" onclick="selectCurrency('INR', 'in')" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <img src="https://hatscripts.github.io/circle-flags/flags/in.svg" class="w-5 h-5 mr-2"> INR
                            </a>
                            <a href="#" onclick="selectCurrency('USD', 'us')" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <img src="https://hatscripts.github.io/circle-flags/flags/us.svg" class="w-5 h-5 mr-2"> USD
                            </a>
                            <a href="#" onclick="selectCurrency('EUR', 'eu')" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <img src="https://hatscripts.github.io/circle-flags/flags/eu.svg" class="w-5 h-5 mr-2"> EUR
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        // Fetch subscription plans from API
        $api_url = "https://test.mahadevjana.dev/web/subscription-list";
        $response = file_get_contents($api_url);
        $subscription_data = json_decode($response, true);

        // Check if API request was successful
        if ($subscription_data && isset($subscription_data['status']) && $subscription_data['status'] === true) {
            $plans = $subscription_data['data'];
        } else {
            // Fallback if API fails
            $plans = [];
            echo '<div class="text-center text-red-500 mb-8">Unable to load subscription plans. Please try again later.</div>';
        }

        // Check if we have plans to display
        if (!empty($plans)) {
            // Determine layout classes based on number of plans
            $containerClasses = 'w-full mx-auto grid grid-cols-1 gap-8 ';
            $maxWidth = 'max-w-6xl';
            
            if (count($plans) === 1) {
                $containerClasses .= 'md:grid-cols-1 place-items-center';
                $maxWidth = 'max-w-md';
            } elseif (count($plans) === 2) {
                $containerClasses .= 'md:grid-cols-2';
                $maxWidth = 'max-w-4xl';
            } else {
                $containerClasses .= 'md:grid-cols-3';
            }
        ?>
        <div class="<?php echo $containerClasses . ' ' . $maxWidth; ?>">
            <?php
            $animations = ["fade-left", "zoom-out", "fade-right"];
            $planTypes = ["For individuals", "For startups", "For big companies"];
            
            // Find the Pro plan index to mark it as popular
            $proIndex = -1;
            foreach ($plans as $i => $p) {
                if ($p['name'] === 'Pro') {
                    $proIndex = $i;
                    break;
                }
            }
            
            // If Pro exists, make it popular; otherwise use the middle plan
            $popularIndex = $proIndex >= 0 ? $proIndex : (count($plans) === 2 ? 1 : (count($plans) >= 3 ? 1 : 0));
            
            foreach ($plans as $index => $plan) {
                $features = json_decode($plan['features'], true);
                $animation = isset($animations[$index]) ? $animations[$index] : $animations[$index % count($animations)];
                $planType = isset($planTypes[$index]) ? $planTypes[$index] : "For businesses";
                $isPopular = ($index === $popularIndex);
                $amount = number_format($plan['amount']);
                
                // Determine if this is the Pro plan (only Pro gets special styling)
                $isPro = ($plan['name'] === 'Pro');
                
                // Set card width for single plan and ensure consistent width for all plan cards
                $cardWidth = count($plans) === 1 ? 'w-full max-w-md' : 'min-w-full';
                
                // Add proper spacing classes for the card
                $cardSpacing = 'h-full'; // Make all cards same height
            ?>
            <!-- <?php echo $plan['name']; ?> Plan -->
            <div
                data-aos="<?php echo $animation; ?>"
                data-aos-anchor="#example-anchor"
                data-aos-offset="500"
                data-aos-duration="1000"
                class="<?php echo $isPro ? 'bg-[#075E54] text-white relative border-4 border-[#075E54]' : 'bg-white border border-gray-100'; ?> rounded-2xl shadow p-8 flex flex-col items-center <?php echo $cardWidth . ' ' . $cardSpacing; ?>">
                <div class="flex justify-start items-start w-[100%] gap-3.5">
                    <div class="<?php echo $isPro ? 'rounded-[.8rem] bg-white p-2' : 'w-12 h-12 rounded-full bg-'.($isPro ? 'white' : '[#e6f0ef]'); ?> flex items-center justify-center mb-4">
                        <?php if ($plan['name'] === 'Basic') { ?>
                            <!-- <span class="block w-6 h-6 bg-[#075E54] rounded-full"></span> -->
                            <img src="image/Ellipse 439 (1).svg" alt="" class="">
                        <?php } elseif ($plan['name'] === 'Pro') { ?>
                            <img src="image/Group 39520.svg" alt="" class="w-[2.5rem]">
                        <?php } else { ?>
                            <img src="image/Group 39506.svg" alt="">
                        <?php } ?>
                    </div>
                    <div class="text-left w-full mb-2">
                        <p class="<?php echo $isPro ? 'text-[#a7d4cf]' : 'text-gray-500'; ?> text-sm"><?php echo $planType; ?></p>
                        <h3 class="text-xl font-bold <?php echo $isPro ? 'text-white' : 'text-gray-900'; ?>"><?php echo $plan['name']; ?></h3>
                        <?php if ($isPopular) { ?>
                            <span class="absolute top-6 right-6 bg-[#075E54] text-xs px-3 py-1 rounded-full font-semibold text-white bg-opacity-50 bg-color-white">Popular</span>
                        <?php } ?>
                    </div>
                </div>
                <p class="<?php echo $isPro ? 'text-[#c5e0dd]' : 'text-gray-500'; ?> mb-4 text-left w-full"><?php echo $plan['description']; ?></p>
                <div class="flex items-end mb-2 w-full">
                    <span class="text-3xl font-extrabold <?php echo $isPro ? 'text-white' : 'text-gray-900'; ?>">
                        <i class="ri-money-rupee-circle-line"></i><?php echo $amount; ?>
                    </span>
                    <span class="<?php echo $isPro ? 'text-[#c5e0dd]' : 'text-gray-500'; ?> ml-1">/monthly</span>
                </div>
                <div class="text-left w-full mb-4">
                    <p class="font-semibold mb-2">What's included</p>
                    <ul class="space-y-2">
                        <?php 
                        if (!empty($features)) {
                            foreach ($features as $feature) { 
                        ?>
                        <li class="flex items-center <?php echo $isPro ? '' : 'text-gray-700'; ?>">
                            <svg class="w-5 h-5 <?php echo $isPro ? 'text-[#075E54] bg-white' : 'bg-[#075E54] text-white'; ?> rounded-full mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            <?php echo $feature; ?>
                        </li>
                        <?php 
                            }
                        } else {
                            echo '<li class="text-gray-500">No features listed</li>';
                        }
                        ?>
                    </ul>
                </div>
                <button class="mt-auto w-full <?php echo $isPro ? 'bg-white text-[#075E54] hover:bg-gray-100' : 'bg-[#075E54] text-white hover:bg-[#064e49]'; ?> py-3 rounded-xl font-semibold transition">Get started</button>
            </div>
            <?php } ?>
        </div>
        <?php } ?>
    </main>
    <?php
    include("footer.php")
    ?>

    <script>
        // Currency conversion rates (simplified example)
        const conversionRates = {
            'INR': 1,       // Base currency
            'USD': 0.012,   // INR to USD conversion
            'EUR': 0.011    // INR to EUR conversion
        };
        
        let currentCurrency = 'INR';
        
        function toggleCurrencyDropdown() {
            const dropdown = document.getElementById("currency-dropdown");
            dropdown.classList.toggle("hidden");
        }

        function selectCurrency(name, flagCode) {
            const oldCurrency = currentCurrency;
            currentCurrency = name;
            
            document.getElementById("selected-text").textContent = name;
            document.getElementById("selected-flag").src = `https://hatscripts.github.io/circle-flags/flags/${flagCode}.svg`;
            
            // Update all prices
            updatePrices(oldCurrency, name);
            
            toggleCurrencyDropdown(); // Hide dropdown after selecting
        }

        function updatePrices(fromCurrency, toCurrency) {
            // Get all price elements
            const priceElements = document.querySelectorAll('.text-3xl.font-extrabold');
            
            priceElements.forEach(element => {
                // Get the current price text, remove currency symbol and commas
                const priceText = element.textContent.replace(/[^\d.]/g, '');
                const currentPrice = parseFloat(priceText);
                
                // Convert the price
                const convertedPrice = (currentPrice / conversionRates[fromCurrency]) * conversionRates[toCurrency];
                
                // Format the price based on currency
                let formattedPrice = '';
                if (toCurrency === 'INR') {
                    formattedPrice = '₹' + Math.round(convertedPrice).toLocaleString('en-IN');
                } else if (toCurrency === 'USD') {
                    formattedPrice = '$' + convertedPrice.toFixed(2);
                } else if (toCurrency === 'EUR') {
                    formattedPrice = '€' + convertedPrice.toFixed(2);
                }
                
                // Update the price element
                element.innerHTML = formattedPrice;
            });
        }

        // Optional: Close dropdown when clicking outside
        document.addEventListener("click", function(event) {
            const selector = document.getElementById("currency-selector");
            const dropdown = document.getElementById("currency-dropdown");

            if (!selector.contains(event.target)) {
                dropdown.classList.add("hidden");
            }
        });
    </script>

</body>

</html>