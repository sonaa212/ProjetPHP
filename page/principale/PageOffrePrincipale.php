<?php session_start(); ?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="../asset/style/PageOffrePrincipale.css">
    <script src="script.js"></script>
</head>

<body>

    <body class="font-body text-grey-900">
        <header>


            <nav>
                <div id="logo">
                    <a href="accueil.php">CVVEN</a>
                </div>
                <img src="" alt="" class="logo">
                <ul class="nav_links">
                    <li class="liste"><a class="link" href="./accueil.php">Accueil</a></li>
                    <li class="liste"><a class="link" href="./contact.php">Contact</a></li>
                    <li class="liste"><a class="link" href="./about.php">À propos</a></li>
                </ul>
            </nav>

            <?php if (!isset($_SESSION["isLogin"])) : ?>
                <a class="cta" href="../auth/connexion.php"><button class="bouton">Connexion</button></a>
            <?php else : ?>
                <a class="cta" href="../auth/deconnexion.php"><button class="bouton">Déconnexion</button></a>
            <?php endif ?>
        </header>

        <section class="home flexCentre" id="home">
            <div class="head_container">
                <div class="box">
                    <div class="text">
                        <h1>Hello.Salut.Hola</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos velit eum ab explicabo ullam asperiores ea? Libero, doloribus adipisci. A modi dicta autem aspernatur atque nostrum eaque neque porro sit?</p>

                    </div>

                </div>
            </div>

        </section>

        <!--         <header>
            <section class="book flexCentre">
                <form action="../RéservationBack/reservationPOST.php" method="post"></form>
                <div class="container flex">
                    <div class="input grid">
                        <div class="box">
                            <label>Départ : </label>
                            <input type="date" placeholder="Check-in-Date">

                        </div>

                        <div class="box">
                            <label>Arrivée : </label> <br>
                            <input type="date" placeholder="0">

                        </div>

                        <div class="box">
                            <label>Adultes : </label> <br>
                            <input type="number" placeholder="0">

                        </div>

                        <div class="box">
                            <label>Enfants : </label> <br>
                            <input type="number" placeholder="0">

                        </div>

                    </div>

                    <div class="search">
                        <a href="#"><input type="submit" value="SEARCH"></a>

                    </div>



                </div>
            </section>

        </header> -->

        <div class="min-w-screen-3xs">

            <main class="bg-grey-200">


                <section class="pb-3 max-w-screen-2xl m-auto xs:px-2 2xl:px-0">
                    </br>

                    <div>
                        <h1 class="text-heading-s mx-3 m:mx-0 mt-4 
                            mb-3 font-bold m:text-heading-m color-text">
                            H O T E L S</h1>
                    </div>

                    </br>
                    <ol>
                        <li class="py-1">
                            <div class="box-shadow bg-white rounded" style="scroll-margin-top: 0px;">

                                <article class="flex bg-white text-grey-900 rounded 2xl:rounded-sm">

                                    <div class="relative overflow-hidden min-h-full rounded 2xl:rounded-sm ImageSection w-full ml-1/2 my-1/2" aria-hidden="true">
                                        <button type="button" class="w-full h-full inset-0 absolute">
                                            <span style="box-sizing: border-box; 
                                                 display: block; 
                                                 overflow: hidden; 
                                                 width: initial; 
                                                 height: initial; 
                                                 background: none; 
                                                 opacity: 1; 
                                                 border: 0px; 
                                                 margin: 0px; 
                                                 padding: 0px; 
                                                 position: absolute; 
                                                 inset: 0px;">

                                                <img alt="Hôtel Elexir, (Paris, France)" src="https://th.bing.com/th/id/OIP.j-Lag91AZKNV_4y4ZpJuYAHaEC?w=320&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" data-nimg="fill" class="select-none bg-grey-500 object-cover" style="position: absolute; 
                                                        inset: 0px; 
                                                        box-sizing: border-box; 
                                                        padding: 0px; 
                                                        border: none; 
                                                        margin: auto; 
                                                        display: block; 
                                                        width: 0px; 
                                                        height: 0px; 
                                                        min-width: 100%; 
                                                        max-width: 100%; 
                                                        min-height: 100%; 
                                                        max-height: 100%;">
                                            </span>

                                        </button>
                                    </div>

                                    <div class="flex flex-grow-1 justify-between AccommodationItem_infoSection__z7HgF flex-1">
                                        <div class="w-1/2 flex-1 mt-2 mb-3 px-3">

                                            <section class="flex justify-between">

                                                <h2 class="text-heading-m mb-1 ItemNameSection" dir="auto">
                                                    <button type="button" data-testid="item-name" class="text-left w-full truncate font-bold">
                                                        <span title="Hotel Elexir, (Paris, France)" itemprop="name">Hôtel Elexir, (Paris, France)</span>
                                                    </button>
                                                </h2>


                                            </section>

                                            <div class="flex flex-wrap items-center mb-1">
                                                <button type="button" data-testid="accommodation-type" class="">
                                                    <span class="flex items-center">
                                                        <span itemprop="starRating" itemscope="" itemtype="https://schema.org/Rating" data-testid="hotel-rating" class="text-s items-center text-orange-700 flex">
                                                            <meta itemprop="ratingValue" content="3">
                                                            <span class="leading-none flex items-center">
                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>

                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>

                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </span>

                                                        <span class="whitespace-nowrap text-m ml-2">Hôtel

                                                        </span>
                                                    </span>
                                                </button>

                                                <button type="button" class="flex ml-2">
                                                    <span class="inline-flex items-center leading-none whitespace-nowrap text-s h-5 px-2 bg-blue-200 text-grey-900 rounded">Wi-Fi gratuit</span>
                                                </button>
                                            </div>




                                            <div class="cursor-pointer hover:bg-grey-200 py-2 mb-1 pl-2">
                                                <button type="button" class="block leading-none flex items-center justify-between w-full text-left " data-testid="rating-section">
                                                    <span data-testid="aggregate-rating" class="overflow-hidden truncate w-11/12" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="bestRating" content="10">
                                                        <meta itemprop="ratingCount" content="480">
                                                        <span class="space-x-1 flex text-m">
                                                            <span class="inline-flex flex-shrink-0 justify-center items-center rounded-full leading-none text-white font-bold w-8 text-s RatingPill_small__L_BAr bg-green-900" itemprop="ratingValue">8.5</span>
                                                            <span class="mt-px truncate">
                                                                <strong class="leading-none">Excellent&nbsp;</strong>
                                                                <span>(0 avis)</span>
                                                            </span>
                                                        </span>
                                                    </span>



                                                </button>
                                            </div>

                                            <div class="ConceptReflectionSection_emptyReflectedConceptWrapper__YKqsz text-s cursor-pointer pl-2 pt-2 border-t border-grey-200"></div>
                                        </div>

                                        <div class="flex flex-col justify-between p-2 DealAreaWrapper_clickoutSectionWide__ZjK38 DealAreaWrapper_clickoutSectionFull__5TqlB w-1/2 w-2/5 pl-3">
                                            <div data-testid="clickout-area" data-advertiser="1064" class="bg-green-100 border border-green-100 rounded 2xl:rounded-sm relative flex flex-col flex-1 justify-between cursor-pointer group hover:border-green-500 ClickoutArea_clickoutArea__BPZE9" itemtype="https://schema.org/Offer" itemscope="" itemprop="makesOffer">
                                                <div class="p-2 flex flex-col h-full">
                                                    <div class="flex flex-col items-end mb-1">

                                                    </div>

                                                    <div class="flex mb-1 justify-between">
                                                        <strong class="advertiser-name-placeholder text-s" data-testid="recommended-price-partner" data-cos="advertiser" itemprop="offeredBy">Hôtel Elexir</strong>
                                                    </div>

                                                    <p class="flex leading-tight mb-1 ClickoutArea_rateAttribute__Re_ps">
                                                        <strong class="text-s text-green-900 mb-1 align-top font-normal" data-cos="rateAttributeBadge" data-testid="rate-attribute"></strong>
                                                    </p>

                                                    <div class="flex items-end flex-row justify-between mt-auto" itemprop="priceSpecification" itemscope="" itemtype="https://schema.org/PriceSpecification">
                                                        <div class="flex flex-col justify-between">
                                                            <div class="flex align-bottom flex-wrap">
                                                                <span class="flex flex-row items-center text-s text-grey-700 hover:text-blue-500">
                                                                    <span class="inline-flex leading-none Icon_sIcon__5F7YL transform mr-1">

                                                                    </span>
                                                                </span>

                                                                <p class="font-bold text-green-900 text-xl" data-testid="recommended-price" data-cos="recommendedPrice" itemprop="price">350&nbsp;€</p>
                                                            </div>
                                                        </div>

                                                        <div class="flex text-right flex-shrink-0">
                                                            <button type="button" class="rounded leading-none font-bold disabled:cursor-not-allowed self-end text-white bg-green-800
                                        hover:bg-green-900 group-hover:bg-green-900
                                        focus:bg-green-900 focus:outline-grey-900 focus:outline-offset-none
                                        active:bg-green-900 h-9 text-m px-3 2xl:rounded-sm pl-6 pr-4">

                                                                <span class=""><a class="flex items-center justify-center" href="PageOffre.php">
                                                                        <span class="truncate -mr-3">Voir l'offre</span>
                                                                        <span class="inline-flex leading-none transform stroke-current ml-3">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2">
                                                                                    <path vector-effect="non-scaling-stroke" d="M10 17l5-5M10 7l5 5"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex w-full">


                                                <div type="button" data-testid="more-deals" class="mt-2 text-s flex justify-between items-center   truncate text-left  w-7/12 h-15 px-2 pb-2 ">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </li>

                        </br>


                        <li class="py-1">
                            <div class="box-shadow bg-white rounded" style="scroll-margin-top: 0px;">

                                <article class="flex bg-white text-grey-900 rounded 2xl:rounded-sm">

                                    <div class="relative overflow-hidden min-h-full rounded 2xl:rounded-sm ImageSection w-full ml-1/2 my-1/2" aria-hidden="true">
                                        <button type="button" class="w-full h-full inset-0 absolute">
                                            <span style="box-sizing: border-box; 
                                             display: block; 
                                             overflow: hidden; 
                                             width: initial; 
                                             height: initial; 
                                             background: none; 
                                             opacity: 1; 
                                             border: 0px; 
                                             margin: 0px; 
                                             padding: 0px; 
                                             position: absolute; 
                                             inset: 0px;">

                                                <img alt="Hôtel Ambassador Santorini (Santorin, Grèce)" src="https://th.bing.com/th/id/R.fde396978964c3e8e6cc61b05cb4d847?rik=U0veloYtSukVSA&pid=ImgRaw&r=0" data-nimg="fill" class="select-none bg-grey-500 object-cover" style="position: absolute; 
                                                    inset: 0px; 
                                                    box-sizing: border-box; 
                                                    padding: 0px; 
                                                    border: none; 
                                                    margin: auto; 
                                                    display: block; 
                                                    width: 0px; 
                                                    height: 0px; 
                                                    min-width: 100%; 
                                                    max-width: 100%; 
                                                    min-height: 100%; 
                                                    max-height: 100%;">
                                            </span>

                                        </button>
                                    </div>

                                    <div class="flex flex-grow-1 justify-between AccommodationItem_infoSection__z7HgF flex-1">
                                        <div class="w-1/2 flex-1 mt-2 mb-3 px-3">

                                            <section class="flex justify-between">

                                                <h2 class="text-heading-m mb-1 ItemNameSection" dir="auto">
                                                    <button type="button" data-testid="item-name" class="text-left w-full truncate font-bold">
                                                        <span title="Hôtel Ambassador Santorini (Santorin, Grèce)" itemprop="name">Hôtel Ambassador Santorini (Santorin, Grèce)</span>
                                                    </button>
                                                </h2>


                                            </section>

                                            <div class="flex flex-wrap items-center mb-1">
                                                <button type="button" data-testid="accommodation-type" class="">
                                                    <span class="flex items-center">
                                                        <span itemprop="starRating" itemscope="" itemtype="https://schema.org/Rating" data-testid="hotel-rating" class="text-s items-center text-orange-700 flex">
                                                            <meta itemprop="ratingValue" content="3">
                                                            <span class="leading-none flex items-center">
                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>

                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>

                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </span>

                                                        <span class="whitespace-nowrap text-m ml-2">Hôtel

                                                        </span>
                                                    </span>
                                                </button>

                                                <button type="button" class="flex ml-2">
                                                    <span class="inline-flex items-center leading-none whitespace-nowrap text-s h-5 px-2 bg-blue-200 text-grey-900 rounded">Wi-Fi gratuit</span>
                                                </button>
                                            </div>




                                            <div class="cursor-pointer hover:bg-grey-200 py-2 mb-1 pl-2">
                                                <button type="button" class="block leading-none flex items-center justify-between w-full text-left " data-testid="rating-section">
                                                    <span data-testid="aggregate-rating" class="overflow-hidden truncate w-11/12" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="bestRating" content="10">
                                                        <meta itemprop="ratingCount" content="480">
                                                        <span class="space-x-1 flex text-m">
                                                            <span class="inline-flex flex-shrink-0 justify-center items-center rounded-full leading-none text-white font-bold w-8 text-s RatingPill_small__L_BAr bg-green-900" itemprop="ratingValue">8.5</span>
                                                            <span class="mt-px truncate">
                                                                <strong class="leading-none">Excellent&nbsp;</strong>
                                                                <span>(0 avis)</span>
                                                            </span>
                                                        </span>
                                                    </span>



                                                </button>
                                            </div>

                                            <div class="ConceptReflectionSection_emptyReflectedConceptWrapper__YKqsz text-s cursor-pointer pl-2 pt-2 border-t border-grey-200"></div>
                                        </div>

                                        <div class="flex flex-col justify-between p-2 DealAreaWrapper_clickoutSectionWide__ZjK38 DealAreaWrapper_clickoutSectionFull__5TqlB w-1/2 w-2/5 pl-3">
                                            <div data-testid="clickout-area" data-advertiser="1064" class="bg-green-100 border border-green-100 rounded 2xl:rounded-sm relative flex flex-col flex-1 justify-between cursor-pointer group hover:border-green-500 ClickoutArea_clickoutArea__BPZE9" itemtype="https://schema.org/Offer" itemscope="" itemprop="makesOffer">
                                                <div class="p-2 flex flex-col h-full">
                                                    <div class="flex flex-col items-end mb-1">

                                                    </div>

                                                    <div class="flex mb-1 justify-between">
                                                        <strong class="advertiser-name-placeholder text-s" data-testid="recommended-price-partner" data-cos="advertiser" itemprop="offeredBy">Hotel Santorini</strong>
                                                    </div>

                                                    <p class="flex leading-tight mb-1 ClickoutArea_rateAttribute__Re_ps">
                                                        <strong class="text-s text-green-900 mb-1 align-top font-normal" data-cos="rateAttributeBadge" data-testid="rate-attribute"></strong>
                                                    </p>

                                                    <div class="flex items-end flex-row justify-between mt-auto" itemprop="priceSpecification" itemscope="" itemtype="https://schema.org/PriceSpecification">
                                                        <div class="flex flex-col justify-between">
                                                            <div class="flex align-bottom flex-wrap">
                                                                <span class="flex flex-row items-center text-s text-grey-700 hover:text-blue-500">
                                                                    <span class="inline-flex leading-none Icon_sIcon__5F7YL transform mr-1">

                                                                    </span>
                                                                </span>

                                                                <p class="font-bold text-green-900 text-xl" data-testid="recommended-price" data-cos="recommendedPrice" itemprop="price">150&nbsp;€</p>
                                                            </div>
                                                        </div>

                                                        <div class="flex text-right flex-shrink-0">
                                                            <button type="button" class="rounded leading-none font-bold disabled:cursor-not-allowed self-end text-white bg-green-800
                                    hover:bg-green-900 group-hover:bg-green-900
                                    focus:bg-green-900 focus:outline-grey-900 focus:outline-offset-none
                                    active:bg-green-900 h-9 text-m px-3 2xl:rounded-sm pl-6 pr-4">

                                                                <span class=""><a class="flex items-center justify-center" href="PageOffre2.php">
                                                                        <span class="truncate -mr-3">Voir l'offre</span>
                                                                        <span class="inline-flex leading-none transform stroke-current ml-3">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2">
                                                                                    <path vector-effect="non-scaling-stroke" d="M10 17l5-5M10 7l5 5"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex w-full">


                                                <div type="button" data-testid="more-deals" class="mt-2 text-s flex justify-between items-center   truncate text-left  w-7/12 h-15 px-2 pb-2 ">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </li>

                        </br>


                        <li class="py-1">
                            <div class="box-shadow bg-white rounded" style="scroll-margin-top: 0px;">

                                <article class="flex bg-white text-grey-900 rounded 2xl:rounded-sm">

                                    <div class="relative overflow-hidden min-h-full rounded 2xl:rounded-sm ImageSection w-full ml-1/2 my-1/2" aria-hidden="true">
                                        <button type="button" class="w-full h-full inset-0 absolute">
                                            <span style="box-sizing: border-box; 
                                         display: block; 
                                         overflow: hidden; 
                                         width: initial; 
                                         height: initial; 
                                         background: none; 
                                         opacity: 1; 
                                         border: 0px; 
                                         margin: 0px; 
                                         padding: 0px; 
                                         position: absolute; 
                                         inset: 0px;">

                                                <img alt="Hôtel Downtown (New York, Etat-Unis)" src="https://th.bing.com/th/id/OIP.fY2X9g3_j3eRZVPd1bIcfgHaE0?pid=ImgDet&w=1020&h=663&rs=1" data-nimg="fill" class="select-none bg-grey-500 object-cover" style="position: absolute; 
                                                inset: 0px; 
                                                box-sizing: border-box; 
                                                padding: 0px; 
                                                border: none; 
                                                margin: auto; 
                                                display: block; 
                                                width: 0px; 
                                                height: 0px; 
                                                min-width: 100%; 
                                                max-width: 100%; 
                                                min-height: 100%; 
                                                max-height: 100%;">
                                            </span>

                                        </button>
                                    </div>

                                    <div class="flex flex-grow-1 justify-between AccommodationItem_infoSection__z7HgF flex-1">
                                        <div class="w-1/2 flex-1 mt-2 mb-3 px-3">

                                            <section class="flex justify-between">

                                                <h2 class="text-heading-m mb-1 ItemNameSection" dir="auto">
                                                    <button type="button" data-testid="item-name" class="text-left w-full truncate font-bold">
                                                        <span title="Hôtel Downtown (New York, Etat-Unis)" itemprop="name">Hôtel Downtown (New York, Etat-Unis)</span>
                                                    </button>
                                                </h2>


                                            </section>

                                            <div class="flex flex-wrap items-center mb-1">
                                                <button type="button" data-testid="accommodation-type" class="">
                                                    <span class="flex items-center">
                                                        <span itemprop="starRating" itemscope="" itemtype="https://schema.org/Rating" data-testid="hotel-rating" class="text-s items-center text-orange-700 flex">
                                                            <meta itemprop="ratingValue" content="3">
                                                            <span class="leading-none flex items-center">
                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>

                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>

                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </span>

                                                        <span class="whitespace-nowrap text-m ml-2">Hôtel

                                                        </span>
                                                    </span>
                                                </button>

                                                <button type="button" class="flex ml-2">
                                                    <span class="inline-flex items-center leading-none whitespace-nowrap text-s h-5 px-2 bg-blue-200 text-grey-900 rounded">Wi-Fi gratuit</span>
                                                </button>
                                            </div>




                                            <div class="cursor-pointer hover:bg-grey-200 py-2 mb-1 pl-2">
                                                <button type="button" class="block leading-none flex items-center justify-between w-full text-left " data-testid="rating-section">
                                                    <span data-testid="aggregate-rating" class="overflow-hidden truncate w-11/12" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="bestRating" content="10">
                                                        <meta itemprop="ratingCount" content="480">
                                                        <span class="space-x-1 flex text-m">
                                                            <span class="inline-flex flex-shrink-0 justify-center items-center rounded-full leading-none text-white font-bold w-8 text-s RatingPill_small__L_BAr bg-green-900" itemprop="ratingValue">8.5</span>
                                                            <span class="mt-px truncate">
                                                                <strong class="leading-none">Excellent&nbsp;</strong>
                                                                <span>(0 avis)</span>
                                                            </span>
                                                        </span>
                                                    </span>



                                                </button>
                                            </div>

                                            <div class="ConceptReflectionSection_emptyReflectedConceptWrapper__YKqsz text-s cursor-pointer pl-2 pt-2 border-t border-grey-200"></div>
                                        </div>

                                        <div class="flex flex-col justify-between p-2 DealAreaWrapper_clickoutSectionWide__ZjK38 DealAreaWrapper_clickoutSectionFull__5TqlB w-1/2 w-2/5 pl-3">
                                            <div data-testid="clickout-area" data-advertiser="1064" class="bg-green-100 border border-green-100 rounded 2xl:rounded-sm relative flex flex-col flex-1 justify-between cursor-pointer group hover:border-green-500 ClickoutArea_clickoutArea__BPZE9" itemtype="https://schema.org/Offer" itemscope="" itemprop="makesOffer">
                                                <div class="p-2 flex flex-col h-full">
                                                    <div class="flex flex-col items-end mb-1">

                                                    </div>

                                                    <div class="flex mb-1 justify-between">
                                                        <strong class="advertiser-name-placeholder text-s" data-testid="recommended-price-partner" data-cos="advertiser" itemprop="offeredBy">Hôtel Downtown</strong>
                                                    </div>

                                                    <p class="flex leading-tight mb-1 ClickoutArea_rateAttribute__Re_ps">
                                                        <strong class="text-s text-green-900 mb-1 align-top font-normal" data-cos="rateAttributeBadge" data-testid="rate-attribute"></strong>
                                                    </p>

                                                    <div class="flex items-end flex-row justify-between mt-auto" itemprop="priceSpecification" itemscope="" itemtype="https://schema.org/PriceSpecification">
                                                        <div class="flex flex-col justify-between">
                                                            <div class="flex align-bottom flex-wrap">
                                                                <span class="flex flex-row items-center text-s text-grey-700 hover:text-blue-500">
                                                                    <span class="inline-flex leading-none Icon_sIcon__5F7YL transform mr-1">

                                                                    </span>
                                                                </span>

                                                                <p class="font-bold text-green-900 text-xl" data-testid="recommended-price" data-cos="recommendedPrice" itemprop="price">450&nbsp;€</p>
                                                            </div>
                                                        </div>

                                                        <div class="flex text-right flex-shrink-0">
                                                            <button type="button" class="rounded leading-none font-bold disabled:cursor-not-allowed self-end text-white bg-green-800
                                hover:bg-green-900 group-hover:bg-green-900
                                focus:bg-green-900 focus:outline-grey-900 focus:outline-offset-none
                                active:bg-green-900 h-9 text-m px-3 2xl:rounded-sm pl-6 pr-4">

                                                                <span class=""><a class="flex items-center justify-center" href="PageOffre3.php">
                                                                        <span class="truncate -mr-3">Voir l'offre</span>
                                                                        <span class="inline-flex leading-none transform stroke-current ml-3">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2">
                                                                                    <path vector-effect="non-scaling-stroke" d="M10 17l5-5M10 7l5 5"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex w-full">


                                                <div type="button" data-testid="more-deals" class="mt-2 text-s flex justify-between items-center   truncate text-left  w-7/12 h-15 px-2 pb-2 ">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </li>

                        </br>

                        <li class="py-1">
                            <div class="box-shadow bg-white rounded" style="scroll-margin-top: 0px;">

                                <article class="flex bg-white text-grey-900 rounded 2xl:rounded-sm">

                                    <div class="relative overflow-hidden min-h-full rounded 2xl:rounded-sm ImageSection w-full ml-1/2 my-1/2" aria-hidden="true">
                                        <button type="button" class="w-full h-full inset-0 absolute">
                                            <span style="box-sizing: border-box; 
                                                 display: block; 
                                                 overflow: hidden; 
                                                 width: initial; 
                                                 height: initial; 
                                                 background: none; 
                                                 opacity: 1; 
                                                 border: 0px; 
                                                 margin: 0px; 
                                                 padding: 0px; 
                                                 position: absolute; 
                                                 inset: 0px;">

                                                <img alt="Riad Nashira (Maroc)" src="https://th.bing.com/th/id/R.473037186659a1090a58cae288916e42?rik=Q8VvdvWrZZNBgA&pid=ImgRaw&r=0" data-nimg="fill" class="select-none bg-grey-500 object-cover" style="position: absolute; 
                                                        inset: 0px; 
                                                        box-sizing: border-box; 
                                                        padding: 0px; 
                                                        border: none; 
                                                        margin: auto; 
                                                        display: block; 
                                                        width: 0px; 
                                                        height: 0px; 
                                                        min-width: 100%; 
                                                        max-width: 100%; 
                                                        min-height: 100%; 
                                                        max-height: 100%;">
                                            </span>

                                        </button>
                                    </div>

                                    <div class="flex flex-grow-1 justify-between AccommodationItem_infoSection__z7HgF flex-1">
                                        <div class="w-1/2 flex-1 mt-2 mb-3 px-3">

                                            <section class="flex justify-between">

                                                <h2 class="text-heading-m mb-1 ItemNameSection" dir="auto">
                                                    <button type="button" data-testid="item-name" class="text-left w-full truncate font-bold">
                                                        <span title="Best Western Hotel Le Bellevue" itemprop="name">Riad Nashira (Maroc)</span>
                                                    </button>
                                                </h2>


                                            </section>

                                            <div class="flex flex-wrap items-center mb-1">
                                                <button type="button" data-testid="accommodation-type" class="">
                                                    <span class="flex items-center">
                                                        <span itemprop="starRating" itemscope="" itemtype="https://schema.org/Rating" data-testid="hotel-rating" class="text-s items-center text-orange-700 flex">
                                                            <meta itemprop="ratingValue" content="3">
                                                            <span class="leading-none flex items-center">
                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>

                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>

                                                                <span class="inline-flex leading-none transform mr-1/2" data-testid="circle">
                                                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="5" cy="5" r="5" fill="currentColor">

                                                                        </circle>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                        </span>

                                                        <span class="whitespace-nowrap text-m ml-2">Hôtel

                                                        </span>
                                                    </span>
                                                </button>

                                                <button type="button" class="flex ml-2">
                                                    <span class="inline-flex items-center leading-none whitespace-nowrap text-s h-5 px-2 bg-blue-200 text-grey-900 rounded">Wi-Fi gratuit</span>
                                                </button>
                                            </div>




                                            <div class="cursor-pointer hover:bg-grey-200 py-2 mb-1 pl-2">
                                                <button type="button" class="block leading-none flex items-center justify-between w-full text-left " data-testid="rating-section">
                                                    <span data-testid="aggregate-rating" class="overflow-hidden truncate w-11/12" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
                                                        <meta itemprop="worstRating" content="0">
                                                        <meta itemprop="bestRating" content="10">
                                                        <meta itemprop="ratingCount" content="480">
                                                        <span class="space-x-1 flex text-m">
                                                            <span class="inline-flex flex-shrink-0 justify-center items-center rounded-full leading-none text-white font-bold w-8 text-s RatingPill_small__L_BAr bg-green-900" itemprop="ratingValue">8.5</span>
                                                            <span class="mt-px truncate">
                                                                <strong class="leading-none">Excellent&nbsp;</strong>
                                                                <span>(0 avis)</span>
                                                            </span>
                                                        </span>
                                                    </span>



                                                </button>
                                            </div>

                                            <div class="ConceptReflectionSection_emptyReflectedConceptWrapper__YKqsz text-s cursor-pointer pl-2 pt-2 border-t border-grey-200"></div>
                                        </div>

                                        <div class="flex flex-col justify-between p-2 DealAreaWrapper_clickoutSectionWide__ZjK38 DealAreaWrapper_clickoutSectionFull__5TqlB w-1/2 w-2/5 pl-3">
                                            <div data-testid="clickout-area" data-advertiser="1064" class="bg-green-100 border border-green-100 rounded 2xl:rounded-sm relative flex flex-col flex-1 justify-between cursor-pointer group hover:border-green-500 ClickoutArea_clickoutArea__BPZE9" itemtype="https://schema.org/Offer" itemscope="" itemprop="makesOffer">
                                                <div class="p-2 flex flex-col h-full">
                                                    <div class="flex flex-col items-end mb-1">

                                                    </div>

                                                    <div class="flex mb-1 justify-between">
                                                        <strong class="advertiser-name-placeholder text-s" data-testid="recommended-price-partner" data-cos="advertiser" itemprop="offeredBy">Riad Nashira</strong>
                                                    </div>

                                                    <p class="flex leading-tight mb-1 ClickoutArea_rateAttribute__Re_ps">
                                                        <strong class="text-s text-green-900 mb-1 align-top font-normal" data-cos="rateAttributeBadge" data-testid="rate-attribute"></strong>
                                                    </p>

                                                    <div class="flex items-end flex-row justify-between mt-auto" itemprop="priceSpecification" itemscope="" itemtype="https://schema.org/PriceSpecification">
                                                        <div class="flex flex-col justify-between">
                                                            <div class="flex align-bottom flex-wrap">
                                                                <span class="flex flex-row items-center text-s text-grey-700 hover:text-blue-500">
                                                                    <span class="inline-flex leading-none Icon_sIcon__5F7YL transform mr-1">

                                                                    </span>
                                                                </span>

                                                                <p class="font-bold text-green-900 text-xl" data-testid="recommended-price" data-cos="recommendedPrice" itemprop="price">400&nbsp;€</p>
                                                            </div>
                                                        </div>

                                                        <div class="flex text-right flex-shrink-0">
                                                            <button type="button" class="rounded leading-none font-bold disabled:cursor-not-allowed self-end text-white bg-green-800
                                        hover:bg-green-900 group-hover:bg-green-900
                                        focus:bg-green-900 focus:outline-grey-900 focus:outline-offset-none
                                        active:bg-green-900 h-9 text-m px-3 2xl:rounded-sm pl-6 pr-4">

                                                                <span class=""><a class="flex items-center justify-center" href="PageOffre4.php">
                                                                        <span class="truncate -mr-3">Voir l'offre</span>
                                                                        <span class="inline-flex leading-none transform stroke-current ml-3">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" class="pointer-events-none max-h-full max-w-full" xmlns="http://www.w3.org/2000/svg">
                                                                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2">
                                                                                    <path vector-effect="non-scaling-stroke" d="M10 17l5-5M10 7l5 5"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex w-full">


                                                <div type="button" data-testid="more-deals" class="mt-2 text-s flex justify-between items-center   truncate text-left  w-7/12 h-15 px-2 pb-2 ">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        </li>

                        </br>




                    </ol>

                </section>

            </main>
        </div>

        </br>
        </br>

        <div>
            <footer>
                <div class="footer-content">

                    <h3>CVVEN</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, similique nulla officia atque veritatis at adipisci aspernatur nihil omnis mollitia repellendus eligendi porro repellat!</p>
                    <ul class="socials">
                        <li><a href=""><i class="fa fa-facebbok"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>

                    </ul>

                </div>

                <div class="footer-bottom">
                    <p>Copyright &copy;2023 CVVEN. design by <span>CVVEN</span></p>

                </div>
            </footer>
        </div>
    </body>
</body>

</html>