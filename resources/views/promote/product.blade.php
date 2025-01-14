<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Heathy Mates - Your go-to place for health products including medicines, cosmetics, and medical equipment.">
    <title>Heathy Mates</title>

    <link rel="stylesheet" href="{{ asset('front/assets/css/index.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script src="{{ asset('front/assets/js/index.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Remove the older version of Font Awesome if not needed -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
</head>

<body>

    <header>
        <nav>
            <div class="nav-container">
                <a href="index.html">
                    <!-- <img src="https://realbearpro.com/img/logo-full.png" class="logonav" alt="Heathy Mates Logo"> -->
                </a>

                <div class="nav-profile">
                    <p class="nav-profile-name">Basket</p>
                    <div onclick="openCart()" style="cursor: pointer;" aria-label="Open Cart" class="nav-profile-cart">
                        <i class="fas fa-cart-shopping"></i>
                        <div id="cartcount" class="cartcount" style="display: none;">
                            0
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        <aside class="sidebar">
            <input onkeyup="searchsomething(this)" id="txt_search" type="text" class="sidebar-search"
                placeholder="Search something...">

            <a onclick="searchproduct('all')" class="sidebar-items">ทั้งหมด</a>
            <a onclick="searchproduct('ยาภายนอก')" class="sidebar-items">ยาภายนอก</a>
            <a onclick="searchproduct('ยาภายใน')" class="sidebar-items">ยาภายใน</a>
            <a onclick="searchproduct('เวชสำอางค์')" class="sidebar-items">เวชสำอางค์</a>
            <a onclick="searchproduct('อุปกรณ์ทางการแพทย์')" class="sidebar-items">อุปกรณ์ทางการแพทย์</a>
        </aside>
        {{-- <section id="productlist" class="product">
            <!-- Products will be dynamically inserted here -->
        </section> --}}

        <section class="product">
            @foreach ($products as $product)
                <div class="product-item">
                    <img class="product-img" src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                    <p style="font-size: 1.2vw;">{{ $product->name }}</p>
                    <p stlye="font-size: 1vw;">
                        {{ $product->price }} THB</p>
                    <button onclick="showProductDetails({{ $product->id }})">View Details</button>
                </div>

                </div>
            @endforeach
        </section>
    </main>

    <!-- Modal for Product Details -->
    <div id="modalDesc" class="modal" style="display: none;">
        <div onclick="closeModal()" class="modal-bg"></div>
        <div class="modal-page">
            <h2>Detail</h2>
            <br>

            <div class="modaldesc-content">
                <img id="mdd-img" class="modaldesc-img"
                    src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80"
                    alt="Product Image">
                <div class="modaldesc-detail">
                    <p id="mdd-name" style="font-size: 1.5vw;">Product name</p>
                    <p id="mdd-price" style="font-size: 1.2vw;">500 THB</p>
                    <br>
                    <p id="mdd-desc" style="color: #adadad;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Duis vehicula ex id metus viverra, a scelerisque ligula consectetur.</p>
                    <br>
                    <div class="btn-control">
                        <button onclick="closeModal()" class="btn" aria-label="Close Modal">Close</button>
                        <button onclick="addtocart()" class="btn btn-buy" aria-label="Add to Cart">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Cart -->
    <div id="modalCart" class="modal" style="display: none;">
        <div onclick="closeModal()" class="modal-bg"></div>
        <div class="modal-page">
            <h2>My Cart</h2>
            <br>
            <div id="mycart" class="cartlist">
                <!-- Cart items will be dynamically inserted here -->
            </div>
            <div class="btn-control">
                <button onclick="closeModal()" class="btn" aria-label="Cancel">Cancel</button>
                <button class="btn btn-buy" aria-label="Buy">Buy</button>
            </div>
        </div>
    </div>

    {{-- <script src="java.js"></script> --}}
</body>

</html>
