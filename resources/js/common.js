import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import Swiper from 'swiper';
window.Swiper = Swiper.use([Autoplay, Navigation, Pagination]);
document.addEventListener('DOMContentLoaded', function() {
    //header scroll
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('header');
        if (window.scrollY > 50) { 
            navbar.classList.add('scroll');
        } else {
            navbar.classList.remove('scroll');
        }
    });

    //mainbanner
    $('#m_banner_ul').slick({
    dots: true,
    autoplaySpeed: 5000,
    appendArrows : $('.m_banner_btn_wrap'),
    appendDots : $('.m_banner_btn_wrap'),
    });

    // skin4 협회보 PDF
    const listItems = document.querySelectorAll('.skin4 .list_li');
    const previewItems = document.querySelectorAll('.skin4 .previewLi');
    const pdfdotItems = document.querySelectorAll('.skin4 .dotLi');

    listItems.forEach((item, index) => {
    item.addEventListener('mouseover', function() {
        previewItems.forEach(li => {
        li.classList.remove('block')
        li.classList.add('hidden')
        });
        if (previewItems[index]) {
        previewItems[index].classList.remove('hidden');
        previewItems[index].classList.add('block');
        };
        pdfdotItems.forEach(li => li.classList.remove('bg-point'));
        if (pdfdotItems[index]) {
        pdfdotItems[index].classList.add('bg-point');
        }
    });
    });

    //협회 행사사진
    $('.list_slide1').slick({
    appendArrows : $('.list_slide1_tab .arrowWrap'),
    slidesToShow: 4,
    slideToScroll: 1,
        responsive: [
            {
            breakpoint: 1279,
            settings: {
                slidesToShow: 3,
            }
            },
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
        ]
    });
    $('.sec4_tabs').slick({
        slidesToShow: 10,
        slideToScroll: 1,
        infinite: false,
        nextArrow : '<button type="button" class="slick-next"><span class="material-symbols-rounded">arrow_right_alt</span></button>',
        prevArrow : '<button type="button" class="slick-prev"><span class="material-symbols-rounded">arrow_left_alt</span></button>',
    });
});