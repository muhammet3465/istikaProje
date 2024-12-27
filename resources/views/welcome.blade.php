<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    </head>
    <body >
           <!-- ====== Navbar Section Start -->
    <header
    x-data="
      {
        navbarOpen: false,
        searchForm: false,
        cartOpen: false
      }
    "
    class="flex w-full items-center bg-white"
  >
    <div class="container mx-auto">
      <div class="relative -mx-4 flex items-center justify-between">
        <div class="w-60 max-w-full px-4">
          <a href="javascript:void(0)" class="block w-full py-5 lg:py-3">
            <img
              src="./../assets/images/logo/logo.svg"
              alt="logo"
              class="w-full"
            />
          </a>
        </div>
        <div class="flex w-full items-center justify-between px-4">
          <div class="w-full">
            <button
              @click="navbarOpen = !navbarOpen"
              :class="navbarOpen && 'navbarTogglerActive' "
              id="navbarToggler"
              class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
            >
              <span
                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
              ></span>
              <span
                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
              ></span>
              <span
                class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"
              ></span>
            </button>
            <nav
              :class="!navbarOpen && 'hidden' "
              id="navbarCollapse"
              class="absolute right-4 top-full w-full max-w-[250px] justify-center rounded-lg bg-white py-5 px-6 shadow lg:static lg:flex lg:w-full lg:max-w-full lg:bg-transparent lg:py-0 lg:shadow-none"
            >
              <ul class="block lg:flex">
                <li>
                  <a
                    href="javascript:void(0)"
                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:mx-6 lg:inline-flex lg:py-6"
                  >
                    Home
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:mx-6 lg:inline-flex lg:py-6"
                  >
                    Men
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:mx-6 lg:inline-flex lg:py-6"
                  >
                    Women
                  </a>
                </li>
                <li>
                  <a
                    href="javascript:void(0)"
                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:mx-6 lg:inline-flex lg:py-6"
                  >
                    Accessories
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div
            class="relative right-16 hidden items-center justify-end sm:flex lg:right-0"
          >
            <div class="relative">
              <div class="flex max-w-[200px] justify-end">
                <button
                  @click="searchForm = !searchForm"
                  class="flex h-10 w-12 items-center justify-center text-dark"
                >
                  <svg
                    width="20"
                    height="18"
                    viewBox="0 0 20 18"
                    class="fill-current"
                  >
                    <path
                      d="M19.4062 16.8125L13.9375 12.375C14.9375 11.0625 15.5 9.46875 15.5 7.78125C15.5 5.75 14.7187 3.875 13.2812 2.4375C10.3437 -0.5 5.5625 -0.5 2.59375 2.4375C1.1875 3.84375 0.40625 5.75 0.40625 7.75C0.40625 9.78125 1.1875 11.6562 2.625 13.0937C4.09375 14.5625 6.03125 15.3125 7.96875 15.3125C9.875 15.3125 11.75 14.5937 13.2187 13.1875L18.75 17.6562C18.8437 17.75 18.9687 17.7812 19.0937 17.7812C19.25 17.7812 19.4062 17.7187 19.5312 17.5937C19.6875 17.3437 19.6562 17 19.4062 16.8125ZM3.375 12.3437C2.15625 11.125 1.5 9.5 1.5 7.75C1.5 6 2.15625 4.40625 3.40625 3.1875C4.65625 1.9375 6.3125 1.3125 7.96875 1.3125C9.625 1.3125 11.2812 1.9375 12.5312 3.1875C13.75 4.40625 14.4375 6.03125 14.4375 7.75C14.4375 9.46875 13.7187 11.125 12.5 12.3437C10 14.8437 5.90625 14.8437 3.375 12.3437Z"
                    />
                  </svg>
                </button>
              </div>
              <div
                x-show="searchForm"
                @click.outside="searchForm = false"
                class="absolute top-full right-0 mt-5 w-[330px]"
              >
                <form class="flex items-center justify-between">
                  <input
                    type="text"
                    placeholder="Search Components or UI"
                    class="w-full rounded-md border border-transparent bg-white py-4 pl-5 pr-8 shadow-card outline-none focus:border-primary focus:shadow-input focus-visible:shadow-none"
                  />
                  <button
                    class="absolute right-5 top-1/2 -translate-y-1/2 text-body-color"
                  >
                    <svg
                      width="20"
                      height="18"
                      viewBox="0 0 20 18"
                      class="fill-current"
                    >
                      <path
                        d="M19.4062 16.8125L13.9375 12.375C14.9375 11.0625 15.5 9.46875 15.5 7.78125C15.5 5.75 14.7187 3.875 13.2812 2.4375C10.3437 -0.5 5.5625 -0.5 2.59375 2.4375C1.1875 3.84375 0.40625 5.75 0.40625 7.75C0.40625 9.78125 1.1875 11.6562 2.625 13.0937C4.09375 14.5625 6.03125 15.3125 7.96875 15.3125C9.875 15.3125 11.75 14.5937 13.2187 13.1875L18.75 17.6562C18.8437 17.75 18.9687 17.7812 19.0937 17.7812C19.25 17.7812 19.4062 17.7187 19.5312 17.5937C19.6875 17.3437 19.6562 17 19.4062 16.8125ZM3.375 12.3437C2.15625 11.125 1.5 9.5 1.5 7.75C1.5 6 2.15625 4.40625 3.40625 3.1875C4.65625 1.9375 6.3125 1.3125 7.96875 1.3125C9.625 1.3125 11.2812 1.9375 12.5312 3.1875C13.75 4.40625 14.4375 6.03125 14.4375 7.75C14.4375 9.46875 13.7187 11.125 12.5 12.3437C10 14.8437 5.90625 14.8437 3.375 12.3437Z"
                      />
                    </svg>
                  </button>
                </form>
              </div>
            </div>
            <div class="relative">
              <div class="flex max-w-[200px] justify-end">
                <button
                  @click="cartOpen = !cartOpen"
                  class="relative flex h-10 w-12 items-center justify-center text-dark"
                >
                  <svg
                    width="27"
                    height="26"
                    viewBox="0 0 27 26"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M17.5367 19.5811C15.9523 19.5811 14.6523 20.9217 14.6523 22.5467C14.6523 24.1717 15.9523 25.5123 17.5367 25.5123C19.1211 25.5123 20.4211 24.1717 20.4211 22.5467C20.4617 20.9217 19.1617 19.5811 17.5367 19.5811ZM17.5367 24.0904C16.7242 24.0904 16.0742 23.3998 16.0742 22.5467C16.0742 21.6936 16.7242 21.0029 17.5367 21.0029C18.3492 21.0029 18.9992 21.6936 18.9992 22.5467C19.0398 23.3998 18.3492 24.0904 17.5367 24.0904Z"
                      fill="#212B36"
                    />
                    <path
                      d="M8.31504 19.5811C6.73066 19.5811 5.43066 20.9217 5.43066 22.5467C5.43066 24.1717 6.73066 25.5123 8.31504 25.5123C9.89941 25.5123 11.1994 24.1717 11.1994 22.5467C11.24 20.9217 9.94004 19.5811 8.31504 19.5811ZM8.31504 24.0904C7.50254 24.0904 6.85254 23.3998 6.85254 22.5467C6.85254 21.6936 7.50254 21.0029 8.31504 21.0029C9.12754 21.0029 9.77753 21.6936 9.77753 22.5467C9.81816 23.3998 9.12754 24.0904 8.31504 24.0904Z"
                      fill="#212B36"
                    />
                    <path
                      d="M24.4024 0.52832H21.8024C21.1931 0.52832 20.6649 0.975195 20.5837 1.58457L19.8524 6.94707H3.8868C3.52117 6.94707 3.19617 7.10957 2.99305 7.39394C2.78992 7.67832 2.70867 8.04394 2.78992 8.36894V8.40957L5.26805 16.0877C5.38992 16.5752 5.8368 16.9408 6.40555 16.9408H18.3899C19.2837 16.9408 20.0149 16.2908 20.1368 15.3971L22.0056 1.90957H24.4431C24.8493 1.90957 25.1743 1.58457 25.1743 1.17832C25.1743 0.77207 24.8087 0.52832 24.4024 0.52832ZM18.6743 15.1939C18.6337 15.3564 18.5118 15.5189 18.3087 15.5189H6.52742L4.2118 8.36894H19.6087L18.6743 15.1939Z"
                      fill="#212B36"
                    />
                  </svg>

                  <span
                    class="absolute top-0 right-0 h-4 w-4 rounded-full bg-primary text-[10px] font-semibold text-white"
                  >
                    3
                  </span>
                </button>
              </div>
              <div
                x-show="cartOpen"
                @click.outside="cartOpen = false"
                class="absolute top-full right-0 mt-5 w-[330px]"
              >
                <div
                  class="overflow-hidden rounded-lg bg-white p-8 shadow-card"
                >
                  <div class="mb-5 border-b border-[#e7e7e7] pb-3">
                    <div class="-mx-1 flex items-center justify-between pb-4">
                      <div class="flex items-center px-1">
                        <div
                          class="mr-3 h-10 w-full max-w-[40px] overflow-hidden rounded"
                        >
                          <img
                            src="./images/checkout/checkout-02/image-02.jpg"
                            alt="product image"
                            class="w-full"
                          />
                        </div>
                        <div>
                          <a
                            href="javascript:void(0)"
                            class="text-sm font-medium text-black hover:text-primary"
                          >
                            Circular Sienna
                          </a>
                          <p
                            class="truncate text-xs font-medium text-body-color"
                          >
                            Awesome white shirt
                          </p>
                        </div>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">
                          $36.00
                        </p>
                      </div>
                    </div>
                    <div class="-mx-1 flex items-center justify-between py-4">
                      <div class="flex items-center px-1">
                        <div
                          class="mr-3 h-10 w-full max-w-[40px] overflow-hidden rounded"
                        >
                          <img
                            src="./images/checkout/checkout-02/image-03.jpg"
                            alt="product image"
                            class="w-full"
                          />
                        </div>
                        <div>
                          <a
                            href="javascript:void(0)"
                            class="text-sm font-medium text-black hover:text-primary"
                          >
                            Black T-shirt
                          </a>
                          <p
                            class="truncate text-xs font-medium text-body-color"
                          >
                            It's a nice black t-shirt
                          </p>
                        </div>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">
                          $36.00
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="-mx-1 border-b border-[#e7e7e7] pb-5">
                    <div class="mb-3 flex items-center justify-between">
                      <div class="px-1">
                        <p class="text-base font-medium text-black">
                          Subtotal
                        </p>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">$108</p>
                      </div>
                    </div>
                    <div class="mb-3 flex items-center justify-between">
                      <div class="px-1">
                        <p class="text-base font-medium text-black">
                          Shipping Cost (+)
                        </p>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">
                          $10.85
                        </p>
                      </div>
                    </div>
                    <div class="flex items-center justify-between">
                      <div class="px-1">
                        <p class="text-base font-medium text-black">
                          Discount (-)
                        </p>
                      </div>
                      <div class="px-1">
                        <p class="text-base font-semibold text-black">
                          $9.00
                        </p>
                      </div>
                    </div>
                  </div>
                  <div
                    class="-mx-1 flex items-center justify-between pt-5 pb-6"
                  >
                    <div class="px-1">
                      <p class="text-base font-medium text-black">
                        Total Payable
                      </p>
                    </div>
                    <div class="px-1">
                      <p class="text-base font-semibold text-black">$88.15</p>
                    </div>
                  </div>

                  <div>
                    <button
                      href="javascript:void(0)"
                      class="flex w-full items-center justify-center rounded-md bg-primary py-[10px] px-10 text-center text-base font-normal text-white hover:bg-opacity-90"
                    >
                      Place Order
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ====== Navbar Section End -->
    </body>
</html>
