document.addEventListener('DOMContentLoaded', function () {

    const isSafari = () => {
        return (
            ~navigator.userAgent.indexOf('Safari') &&
            navigator.userAgent.indexOf('Chrome') < 0
        );
    };

    const isMobile = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return (
                isMobile.Android() ||
                isMobile.BlackBerry() ||
                isMobile.iOS() ||
                isMobile.Opera() ||
                isMobile.Windows()
            );
        },
    };

    if (isMobile.any()) {
        document.querySelector('body').classList.add('v-mobile');
        document.querySelector('html').classList.add('v-mobile');
    } else {
        document.querySelector('body').classList.add('v-desk');
        document.querySelector('html').classList.add('v-desk');
    }


    //menuToggle
    document.querySelector('.menu__toggle').addEventListener('click', function () {
        document.querySelector('.menu__toggle').classList.toggle('_active-menu');
        document.querySelector('.menu__box').classList.toggle('_active-menu');
        document.body.classList.toggle('_lock');
    });

    const subMenuTrigger = document.querySelectorAll('.has_submenu');
    subMenuTrigger.forEach(trigger => {
        trigger.addEventListener('click', function (e) {
            if (isMobile.any() || window.innerWidth < 1200) {
                e.preventDefault();
                trigger.classList.toggle('_active');
                // document.querySelector('.menu__toggle').classList.remove('_active-menu');
                // document.querySelector('.menu__box').classList.remove('_active-menu');
                // document.body.classList.remove('_lock');
            }
        })
    })


    // SLIDERS
    const swiperBanner = new Swiper('.banner-slider .swiper', {
        autoHeight: true,
        loop: true,
        slidesPerView: 1,
        slidesPerGroup: 1,
        pagination: {
            el: '.banner-slider .swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.banner-slider .swiper-button-next',
            prevEl: '.banner-slider .swiper-button-prev',
        },
    });
    const swiperPopular = new Swiper('.popular-slider .swiper', {
        loop: true,
        slidesPerView: 1,
        slidesPerGroup: 1,
        navigation: {
            nextEl: '.popular-slider .swiper-button-next',
            prevEl: '.popular-slider .swiper-button-prev',
        },
    });

    const weeklySliders = document.querySelectorAll('.weekly-slider .swiper');
    if (weeklySliders) {
        weeklySliders.forEach(item => {
            const nextBtn = item.querySelector('.swiper-button-next');
            const prevBtn = item.querySelector('.swiper-button-prev');
            const slidesPerViewDesktop = item.classList.contains('swiper-3-card') ? 3 : 4;
            const swiperWeekly = new Swiper(item, {
                loop: true,
                slidesPerView: 2,
                slidesPerGroup: 1,
                spaceBetween: 20,
                breakpoints: {
                    899: {
                        slidesPerView: 3,
                    },
                    1199: {
                        slidesPerView: slidesPerViewDesktop,
                    },
                },
                navigation: {
                    nextEl: nextBtn,
                    prevEl: prevBtn,
                },
            });

        })
    }

    const swiperBrandGallery = new Swiper('.pbrand__slider .swiper', {
        loop: true,
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 20,
        breakpoints: {
            899: {
                slidesPerView: 3,
            },
            1199: {
                slidesPerView: 3,
            },
        },
        navigation: {
            nextEl: '.pbrand__slider .swiper-button-next',
            prevEl: '.pbrand__slider .swiper-button-prev',
        },
    });


    var swiperProductThumb = new Swiper('.product-slider .product-slider-thumb ', {
        spaceBetween: 4,
        slidesPerView: 7,
        loop: false,
        freeMode: true,
        loopedSlides: 5, //looped slides should be the same
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var swiperProduct = new Swiper('.product-slider .product-slider-top', {
        spaceBetween: 10,
        loop: false,
        loopedSlides: 5, //looped slides should be the same
        thumbs: {
            swiper: swiperProductThumb,
        },
        pagination: {
            el: '.product-slider .product-slider-top .swiper-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.product-slider .swiper-button-next',
            prevEl: '.product-slider .swiper-button-prev',
        },
    });

    const contactsGalleries = document.querySelectorAll('.contacts-gallery');

    if (contactsGalleries) {
        contactsGalleries.forEach(gallery => {
            const gallerySwiper = gallery.querySelector('.swiper');
            const galleryPagination = gallery.querySelector('.swiper-pagination');

            const swiperContactsGallery = new Swiper(gallerySwiper, {
                loop: true,
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 24,
                breakpoints: {
                    540: {
                        slidesPerView: 2,
                    },
                    899: {
                        slidesPerView: 3,
                    },
                },
                pagination: {
                    el: galleryPagination,
                    clickable: true
                },
            });
        })
    }

    const shopsSlider = document.querySelectorAll('.shops__item-slider');

    if (shopsSlider) {
        shopsSlider.forEach(shopsItem => {
            const shopsItemSwiper = shopsItem.querySelector('.swiper');
            const shopsItemPagination = shopsItem.querySelector('.swiper-pagination');

            const swiperShopsSlider = new Swiper(shopsItemSwiper, {
                loop: true,
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 24,
                breakpoints: {
                    540: {
                        slidesPerView: 2,
                    },
                    899: {
                        slidesPerView: 3,
                    },
                },
                pagination: {
                    el: shopsItemPagination,
                    clickable: true
                },
            });
        })
    }


     const productSwipers = [];
     document.querySelectorAll('.new-info .swiper').forEach(function (el) {
         const nextBtn = el.querySelector('.swiper-button-next');
         const prevBtn = el.querySelector('.swiper-button-prev');
         productSwipers.push(new Swiper(el, {
             slidesPerView: 'auto',
             spaceBetween: 16,
             freeMode: true,
             navigation: {
               nextEl: nextBtn,
               prevEl: prevBtn,
           },
         }));
     });
 
     const newInfoBlocks = document.querySelectorAll('.new-info');

const gallerySwiper = new Swiper('.new__gallery .swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true, // ← добавили
    navigation: {
        nextEl: '.new__gallery .swiper-button-next',
        prevEl: '.new__gallery .swiper-button-prev',
    },
    on: {
        slideChange: function () {
            const index = this.realIndex; // ← заменили activeIndex на realIndex

            newInfoBlocks.forEach(function (block, i) {
                block.style.display = (i === index) ? 'flex' : 'none';
            });

            if (productSwipers[index]) {
                productSwipers[index].update();
            }
        }
    }
});

newInfoBlocks.forEach(function (block, i) {
    block.style.display = (i === 0) ? 'flex' : 'none';
});

const newInfoSliders = document.querySelectorAll('.new-info-slider .swiper');
if (newInfoSliders) {
    newInfoSliders.forEach(item => {
        const nextBtn = item.querySelector('.swiper-button-next');
        const prevBtn = item.querySelector('.swiper-button-prev');
        const swiperNewInfo = new Swiper(item, {
            loop: true,
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 16,
            breakpoints: {
                899: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1199: {
                    slidesPerView: 3
                },
            },
            navigation: {
                nextEl: nextBtn,
                prevEl: prevBtn,
            },
        });
    })
}
    // END | SLIDERS


    // MODAL BRANDS
    const menuItems = document.querySelectorAll('.menu__item');
    const mbrandsOpen = document.querySelectorAll('._mbrands-open');
    var mbrandsModals = document.querySelectorAll('.mbrands');
    const header = document.querySelector('header');

    if (mbrandsModals) {
        if (menuItems) {
            menuItems.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    mbrandsModals.forEach(modal => {
                        modal.classList.remove('_active');
                    })
                })
            })
        }

        if (mbrandsOpen) {
            mbrandsOpen.forEach(item => {
                item.addEventListener('mouseenter', () => {
                    mbrandsModals.forEach(modal => {
                        modal.classList.remove('_active');
                    })

                    const mbrandsModal = document.querySelector(item.dataset.mbrands);

                    if (mbrandsModal) {
                        mbrandsModal.classList.add('_active');
                    }
                })
            })
        }

        if (header) {
            header.addEventListener('mouseleave', () => {
                mbrandsModals.forEach(modal => {
                    modal.classList.remove('_active');
                })
            })
        }
    }
    // END | MODAL BRANDS

    // MODAL CATALOG FILTERS
    const catalogFiltersOpen = document.querySelector('.catalog-filters-open');
    const catalogFiltersClose = document.querySelector('.catalog-filters-close');
    const catalogFilters = document.querySelector('.catalog-filters');

    if (catalogFiltersOpen) {
        catalogFiltersOpen.addEventListener('click', () => {
            catalogFilters.classList.add('_active');
        })
        catalogFiltersClose.addEventListener('click', () => {
            catalogFilters.classList.remove('_active');
        })
    }
    // END | MODAL CATALOG FILTERS


    // PRODUCT COUNTER
    const countDec = document.querySelector('.product-count__dec');
    const countInc = document.querySelector('.product-count__inc');
    const countInput = document.querySelector('.product-count #input-quantity');

    if (countInput) {
        countDec.addEventListener('click', () => {
            if (countInput.value > 1) {
                countInput.value--;
            }
        })
        countInc.addEventListener('click', () => {
            countInput.value++;
        })
    }
    // END | PRODUCT COUNTER

    // MODAL CART
    const mcartOpen = document.querySelector('._mcart-open');
    const mcartCloseBtns = document.querySelectorAll('._mcart-close');
    const mcart = document.querySelector('.mcart');
    const mcartBg = document.querySelector('.mcart__bg');

    if (mcart) {

        mcartOpen.addEventListener('click', () => {
            mcart.classList.add('_active');
            document.body.classList.add('_lock');

        })

        $(document).on("click", "._mcart-close", function () {
            mcart.classList.remove('_active');
            document.body.classList.remove('_lock');
        });

        mcartBg.addEventListener('click', () => {
            mcart.classList.remove('_active');
            document.body.classList.remove('_lock');

        })
    }
    // END | MODAL CART

    // MODAL SIZES
    const msizeOpen = document.querySelector('._msize-open');
    const msizeCloseBtns = document.querySelectorAll('._msize-close');
    const msize = document.querySelector('.msize');
    const msizeBg = document.querySelector('.msize__bg');

    if (msize) {

        msizeOpen.addEventListener('click', () => {
            msize.classList.add('_active');
            document.body.classList.add('_lock');

        })

        $(document).on("click", "._msize-close", function () {
            msize.classList.remove('_active');
            document.body.classList.remove('_lock');
        });

        msizeBg.addEventListener('click', () => {
            mcart.classList.remove('_active');
            document.body.classList.remove('_lock');

        })
    }
    // END | MODAL CART

    // MODAL MESSAGE
    const messageClose = document.querySelector('.message__close');
    const message = document.querySelector('.message');
    const messageBg = document.querySelector('.message__bg');

    if (message) {
        messageClose.addEventListener('click', () => {
            message.classList.remove('_active');
            document.body.classList.remove('_lock');
        })
        messageBg.addEventListener('click', () => {
            message.classList.remove('_active');
            document.body.classList.remove('_lock');

        })
    }
    // END | MODAL MESSAGE

    // ACCOUNT ACCORDION
    const accountItems = document.querySelectorAll('.account-item');

    if (accountItems) {
        accountItems.forEach(item => {
            const toggle = item.querySelector('.account-item__toggle');

            toggle.addEventListener('click', () => {
                item.classList.toggle('_active');
            })
        })
    }

    // END | ACCOUNT ACCORDION

    const openSearchBtn = document.querySelector('.header-search');
    const closeSearchBtn = document.querySelector('.close-search');
    const searchElement = document.getElementById('search');

    if (openSearchBtn && searchElement) {
        openSearchBtn.addEventListener('click', function (e) {
            e.preventDefault();
            searchElement.classList.add('_active');
        });
    }

    if (closeSearchBtn && searchElement) {
        closeSearchBtn.addEventListener('click', function () {
            searchElement.classList.remove('_active');
        });
    }

    const checkoutPhoneMask = document.getElementById('customer_telephone');
    if (checkoutPhoneMask) {
        const maskOptions = {
            mask: '+{38}0000000000'
        };
        const mask = IMask(checkoutPhoneMask, maskOptions);
    }


    // Contacts gallery toggle
    const galleryToggle = document.querySelectorAll('.contacts__button');
    if (galleryToggle) {
        galleryToggle.forEach((toggle) => {
            toggle.addEventListener('click', () => {
                if (toggle.classList.contains('_active')) {
                    toggle.parentNode.querySelector('.contacts-gallery').style.display = 'none';
                    toggle.classList.remove('_active');
                } else {
                    toggle.parentNode.querySelector('.contacts-gallery').style.display = 'block';
                    toggle.classList.add('_active');
                }
            })
        })
    }
    // END |  Contacts gallery toggle


    // Product image zoom
    const productImages = document.querySelectorAll('.product-slider-top-image');
    if (productImages.length > 0) {
        productImages.forEach(item => {
            const image = item.querySelector('img');
            if (image) {
                item.addEventListener('mousemove', (e) => {
                    const rect = item.getBoundingClientRect();
                    const x = ((e.clientX - rect.left) / rect.width) * 100;
                    const y = ((e.clientY - rect.top) / rect.height) * 100;

                    image.style.transformOrigin = `${x}% ${y}%`;
                    image.style.transform = 'scale(2)';
                });

                item.addEventListener('mouseleave', () => {
                    image.style.transform = 'scale(1)';
                    image.style.transformOrigin = 'center center';
                });
            }

        })
    }
    // END | Product image zoom

    // catalog view select
    $('#input-view').change(function (e) {
        $('.catalog-list').removeClass('_product');
        $('.catalog-list').removeClass('_model');
        $('.catalog-list').addClass(e.target.value);
    })


    const shopHeaderItems = document.querySelectorAll('.shops__header-item');
    const shopItems = document.querySelectorAll('.shops__item');

    if (shopHeaderItems.length && shopItems.length) {
        function removeActive() {
            shopHeaderItems.forEach(item => item.classList.remove('active'));
            shopItems.forEach(item => item.classList.remove('active'));
        }

        shopHeaderItems[0].classList.add('active');
        shopItems[0].classList.add('active');

        shopHeaderItems.forEach((item, index) => {
            item.addEventListener('click', function () {
                removeActive();
                item.classList.add('active');
                if (shopItems[index]) {
                    shopItems[index].classList.add('active');
                }
            });
        });
    }


    const productCollectionPoints = document.querySelectorAll('.collectionBanner__point');
    const collectionProducts = document.querySelectorAll('.collectionBanner__product');
    
    let fixedIndex = null;
    
    function clearActive() {
        collectionProducts.forEach(product => {
            product.classList.remove('active');
        });
    }
    
    productCollectionPoints.forEach(point => {
        const index = point.dataset.index;
    
        point.addEventListener('mouseenter', () => {
            // при наведении всегда сбрасываем всё
            clearActive();
    
            const activeProduct = document.querySelector(
                `.collectionBanner__product[data-index="${index}"]`
            );
    
            if (activeProduct) {
                activeProduct.classList.add('active');
            }
        });
    
        point.addEventListener('mouseleave', () => {
            // если нет фиксации — скрываем
            if (fixedIndex === null) {
                clearActive();
            }
        });
    
        point.addEventListener('click', (e) => {
            e.stopPropagation(); // важно!
    
            // если клик по тому же — снимаем
            if (fixedIndex === index) {
                fixedIndex = null;
                clearActive();
                return;
            }
    
            fixedIndex = index;
    
            clearActive();
    
            const activeProduct = document.querySelector(
                `.collectionBanner__product[data-index="${index}"]`
            );
    
            if (activeProduct) {
                activeProduct.classList.add('active');
            }
        });
    });
    
    // клик вне точек — закрывает всё
    document.addEventListener('click', (e) => {
        const isPoint = e.target.closest('.collectionBanner__point');
    
        if (!isPoint) {
            fixedIndex = null;
            clearActive();
        }
    });
});

Fancybox.bind("[data-fancybox]", {
});