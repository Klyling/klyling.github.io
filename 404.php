<?php
// 设置HTTP状态码为404
header("HTTP/1.0 404 Not Found");
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - 页面未找到</title>
    <!-- 引入Tailwind CSS和其他资源 -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- 配置Tailwind自定义颜色和字体 -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#E63946', // 红色主色调
                        secondary: '#10B981', // 绿色辅助色
                        accent: '#8B5CF6', // 紫色强调色
                        dark: '#2B2D42', // 暗红色
                        light: '#F8FAFC'
                    },
                    fontFamily: {
                        kai: ['KaiTi', 'STKaiti', 'SimKai', '楷体', 'serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 text-dark font-kai">
    <!-- 导航栏 -->
    <header class="bg-white shadow-md fixed w-full top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="#" class="flex items-center">
                        <img src="https://youke1.picui.cn/s1/2025/07/29/6888bcea53e33.png" alt="河南罪影科技有限公司" class="h-8 mr-2">
                        <span class="font-bold text-[clamp(0.9rem,3vw,1.25rem)] whitespace-nowrap">河南罪影科技有限公司</span>
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="flex items-center space-x-4">
                        <a href="#" class="text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors whitespace-nowrap">首页</a>
                        <a href="#features" class="text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors whitespace-nowrap">特性</a>
                        <a href="#services" class="text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors whitespace-nowrap">服务</a>
                        <a href="#testimonials" class="text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors whitespace-nowrap">评价</a>
                        <a href="#contact" class="text-gray-700 hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors whitespace-nowrap">联系我们</a>
                    </div>
                </div>
                <div class="md:hidden">
                    <button type="button" class="text-gray-700 hover:text-primary" id="mobile-menu-button">
                        <i class="fa fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- 移动端菜单 -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white shadow-lg">
                <a href="#" class="text-gray-700 hover:text-primary block px-3 py-2 rounded-md text-base font-medium whitespace-nowrap">首页</a>
                <a href="#features" class="text-gray-700 hover:text-primary block px-3 py-2 rounded-md text-base font-medium whitespace-nowrap">特性</a>
                <a href="#services" class="text-gray-700 hover:text-primary block px-3 py-2 rounded-md text-base font-medium whitespace-nowrap">服务</a>
                <a href="#testimonials" class="text-gray-700 hover:text-primary block px-3 py-2 rounded-md text-base font-medium whitespace-nowrap">评价</a>
                <a href="#contact" class="text-gray-700 hover:text-primary block px-3 py-2 rounded-md text-base font-medium whitespace-nowrap">联系我们</a>
            </div>
        </div>
    </header>

    <!-- 404错误内容 -->
    <main class="pt-16 min-h-screen flex items-center justify-center bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="max-w-3xl mx-auto text-center">
                <div class="mb-8">
                    <span class="text-[clamp(3rem,10vw,6rem)] font-bold text-primary">404</span>
                    <p class="text-[clamp(1.5rem,5vw,2.5rem)] font-bold text-dark mt-4">页面未找到</p>
                </div>
                <p class="text-gray-600 text-lg mb-8">很抱歉，您访问的页面不存在或已被移除。请检查URL或返回首页。</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/" class="bg-primary hover:bg-primary/90 text-white px-8 py-3 rounded-lg font-medium transition-all shadow-lg hover:shadow-xl whitespace-nowrap">
                        返回首页 <i class="fa fa-home ml-2"></i>
                    </a>
                    <a href="#contact" class="bg-transparent border-2 border-primary text-primary hover:bg-primary/5 px-8 py-3 rounded-lg font-medium transition-all whitespace-nowrap">
                        联系我们 <i class="fa fa-envelope ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- 页脚 -->
    <footer class="bg-dark text-white pt-16 pb-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 xs:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div class="col-span-1 lg:col-span-1">
                    <div class="flex items-center mb-6">
                        <img src="https://youke1.picui.cn/s1/2025/07/29/6888bcea53e33.png" alt="河南罪影科技有限公司" class="h-8 mr-2">
                        <span class="font-bold text-[clamp(1rem,4vw,1.25rem)] whitespace-nowrap">河南罪影科技有限公司</span>
                    </div>
                    <p class="text-gray-400 mb-6">
                        提供高质量的网站设计和开发服务，帮助企业和个人实现数字化转型。
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary rounded-full flex items-center justify-center transition-colors">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary rounded-full flex items-center justify-center transition-colors">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary rounded-full flex items-center justify-center transition-colors">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary rounded-full flex items-center justify-center transition-colors">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-primary rounded-full flex items-center justify-center transition-colors">
                            <i class="fa fa-youtube-play"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-span-1 lg:col-span-1">
                    <h4 class="text-lg font-bold mb-6">快速链接</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">首页</a></li>
                        <li><a href="#features" class="text-gray-400 hover:text-white transition-colors">特性</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition-colors">服务</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white transition-colors">评价</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">联系我们</a></li>
                    </ul>
                </div>
                
                <div class="col-span-1 lg:col-span-1">
                    <h4 class="text-lg font-bold mb-6">服务</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">网站设计</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">移动应用开发</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">电子商务解决方案</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">UI/UX设计</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">数字营销</a></li>
                    </ul>
                </div>
                
                <div class="col-span-1 lg:col-span-1">
                    <h4 class="text-lg font-bold mb-6">联系我们</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <i class="fa fa-map-marker text-primary mt-1 mr-3"></i>
                            <span class="text-gray-400">河南省宛州高新区汉冶路与独山大道交叉口北200米锦程大厦21层</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa fa-phone text-primary mt-1 mr-3"></i>
                            <span class="text-gray-400">+86 138 3765 8897</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fa fa-envelope text-primary mt-1 mr-3"></i>
                            <span class="text-gray-400">office@mail.crimeshadow.top</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-500 text-sm mb-4 md:mb-0">
                        &copy; 2025 河南罪影科技有限公司. 保留所有权利.
                    </p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors">隐私政策</a>
                        <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors">服务条款</a>
                        <a href="#" class="text-gray-500 hover:text-white text-sm transition-colors">Cookie政策</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // 移动端菜单切换
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // 导航栏滚动效果
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-white/95', 'backdrop-blur-sm');
                navbar.classList.remove('bg-white');
            } else {
                navbar.classList.remove('bg-white/95', 'backdrop-blur-sm');
                navbar.classList.add('bg-white');
            }
        });
    </script>
</body>
</html>
    
