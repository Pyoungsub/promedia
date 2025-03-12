const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontFamily: {
            'titleO': ['ONE-Mobile-Title'],
            'score': ['S-CoreDream-3Light'],
            'montH': ['Mont-heavy'],
            'montL': ['Mont-light'],
            'nanumS': ['NanumSquare'],
            'nanumB': ['NanumBarunGothic'],
            'dokrip': ['Dokrip'],
            'ChosunKm': ['ChosunKm'],
            'noto' : ['Noto Sans KR'],
        },
        container: {
            center: true, // 컨테이너를 가운데 정렬
            padding: '1rem', // 기본 패딩 설정
            screens: {
                'tab': '100%', 
                'max-md': '100%', 
                'max-lg': '1024px', 
                'max-xl': '1280px', 
                '2xl': '1536px', 
                '3xl': '1800px', 
            },
        },
        extend: {
            screens: {
                '2xl': {'max' : '1799px'}, 
                'max-xl': {'max' : '1535px'}, 
                'max-lg': {'max' : '1279px'}, 
                'max-md': {'max' : '1023px'}, 
                'tab': {'max' : '767px'}, 
                'mob': {'max' : '640px'}, 
                '2sm': {'max' : '420px'}, 
                'max-3sm': {'max' : '360px'}, 
                // '2xl': '1536px',
            },
            fontSize : {
                'inhe' : ['inherit', 'inherit'], 
            },
            colors: {
                'grizzle' : {
                    100: '#eef1f6',
                    200: '#f8fafc',
                    300: '#e9e9e9',
                    800: '#787d89',
                },
                'point': {
                    100 : '#1748c6',
                    200 : '#da373d',
                    300 : '#041a70',
                    400 : '#03569f'
                },
                'ca' : {
                    'sat' : '#339ef3',
                    'sun' : '#ed0808',
                },
                'sche1': '#fbd3d5',
                'sche2': '#d2ebd3',
                'sche3': '#d1ddf3',
                '4b': '#454545',
                'bb': '#333',
                'cc': '#ccc',
                'popbg' : 'rgba(0,0,0,0.5)'
            },
            width : {
                '15' : '3.75rem',
                '88' : '22rem',
                'calc1' : 'calc(100% - 7.5em)',
                'calc2' : 'calc(100% - 3em)',
                'calc3' : 'calc(100% - 220px)',
                'calc4' : 'calc(25% - 20px)',
                'calc5' : 'calc(100% - 19rem)',
                'calc6' : 'calc(100% - 7em)',
                'calc7' : 'calc(100% - 180px)',
                'calc8' : 'calc(100% - 200px)',
                'calc9' : 'calc(100%/3 - 20px)',
                'calc10' : 'calc(20% - 20px)',
                'calc11' : 'calc(100% - 7.5rem)',
                'calc12' : 'calc(50% - 50px)',
                'calc13' : 'calc(100% - 3.5em)',
                'calcN' : 'calc(100% - 15em)',
                'calcN-lg' : 'calc(100% - 13em)',
                'calcN-tab' : 'calc(100% - 11em)',
                
            },
            maxWidth: {
                '4/5': '80%',
                'cont': '1480px'
            },
            height : {
                '2xlcalc' : 'calc(100vh - 125px)',
                'intcalc' : 'calc(100% - 3.5em)',
            },
            margin : {
                'mcalc4' : 'calc(80px/3)',
                'mcalc9' : '30px',
                'mcalc10' : 'calc(100px/4)',
            },
            padding : {
                'his' : 'calc(50% - 8em)',
            },
            backgroundImage: {
                'mainsec2' : 'url("/storage/company/main_sec2_bg.png")',
                'mainsec3' : 'url("/storage/company/main_sec3_bg.png")',
                'mainsec4' : 'url("/storage/company/main_sec4_bg.jpg")',
                'mainintro' : 'url("/storage/company/m_intro_bg.jpg")',
                'mainintro2' : 'url("/storage/company/m_intro_bg2.png")',
                'mainintro3' : 'url("/storage/company/m_intro_bg3.png")',
                'subbg1' : 'url("/storage/company/subbg_01.jpg")',
                'subbg2' : 'url("/storage/company/subbg_02.jpg")',
                'subbg3' : 'url("/storage/company/subbg_03.jpg")',
                'subbg4' : 'url("/storage/company/subbg_04.jpg")',
                'subbg6' : 'url("/storage/company/subbg_06.jpg")',
                'subbg7' : 'url("/storage/company/subbg_07.jpg")',
                'subbg8' : 'url("/storage/company/subbg_08.jpg")',
                'subbg9' : 'url("/storage/company/subbg_09.jpg")',
                'gra1': 'linear-gradient(to right, rgba(51, 51, 51, 0.3) 80%, transparent)',
                'quotes': 'url("/storage/icons/quotes.png")',
                'quotes2': 'url("/storage/icons/quotes2.png")',
                'kopma': 'url("/storage/company/kopma.png")',
                'mark': 'url("/storage/company/bg_mark.png")',
                'mark2': 'url("/storage/company/mark2.png")',
                'tab': 'url("/storage/company/tab_bg.png")',
                'tabbox': 'url("/storage/icons/tabbox_bg.png")',
                'noimg': 'url("/storage/member/mem_noimage.jpg")',
            },
            backgroundPosition: {
                'top-center' : 'top center'
            },
            borderWidth: {
                DEFAULT: '1px',
                '0': '0',
                '2': '2px',
                '3': '3px',
                '4': '4px',
                '6': '6px',
                '8': '8px',
            },
            backgroundSize: {
                'full' : '100% 100%',
                'none' : '0 0'
            },
            boxShadow : {
                'sh1' : '0 0 5px #333',
                'sh2' : '0 2px 2px rgba(0, 0, 0, 0.1)',
            },
            translate: {
                'center': '-50%',
            },
            rotate: {
                '225': '225deg',
            },
            keyframes: {
                wiggle: {
                    '0%, 100%': { transform: 'rotate(-3deg)' },
                    '50%': { transform: 'rotate(3deg)' },
                }
            },
            animation: {
                wiggle: 'wiggle 1s ease-in-out infinite',
            }
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
