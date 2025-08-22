<div class="container mx-auto flex items-center justify-between relative">
    <a href="#">
        <svg width="61" height="44" viewbox="0 0 61 44" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3" y="2" width="4" height="19" rx="0.5" fill="#dddddd"/>
            <rect x="8" y="2" width="4" height="19" rx="0.5" fill="#dddddd"/>
            <rect x="3" y="27" width="4" height="13" rx="0.5" transform="rotate(-90 3 27)" fill="#dddddd"/>
            <rect x="3" y="32" width="4" height="13" rx="0.5" transform="rotate(-90 3 32)" fill="#dddddd"/>
            <path d="M22.5 32C22.2239 32 22 31.7761 22 31.5V28.5C22 28.2239 22.2239 28 22.5 28H34.5C34.7761 28 35 28.2239 35 28.5V31.5C35 31.7761 34.7761 32 34.5 32H22.5Z" fill="#dddddd"/>
            <path d="M22.5 21C22.2239 21 22 20.7761 22 20.5V17.5C22 17.2239 22.2239 17 22.5 17H32.5C32.7761 17 33 17.2239 33 17.5V20.5C33 20.7761 32.7761 21 32.5 21H22.5Z" fill="#dddddd"/>
            <rect x="22" y="16" width="4" height="11" rx="0.5" transform="rotate(-90 22 16)" fill="#dddddd"/>
            <path d="M22.5 11C22.2239 11 22 10.7761 22 10.5V7.5C22 7.22386 22.2239 7 22.5 7L36.5 7C36.7761 7 37 7.22386 37 7.5V10.5C37 10.7761 36.7761 11 36.5 11H22.5Z" fill="#dddddd"/>
            <rect x="22" y="6" width="4" height="15" rx="0.5" transform="rotate(-90 22 6)" fill="#dddddd"/>
            <rect x="3" y="37" width="4" height="34" rx="0.5" transform="rotate(-90 3 37)" fill="#dddddd"/>
            <rect x="3" y="42" width="4" height="34" rx="0.5" transform="rotate(-90 3 42)" fill="#dddddd"/>
            <path d="M35.5 41.5C35.5 41.7761 35.724 42.0005 36 41.9951C41.7863 41.8809 47.3083 39.788 51.4099 36.1421C55.6295 32.3914 58 27.3043 58 22C58 16.6957 55.6295 11.6086 51.4099 7.85787C47.3083 4.21203 41.7863 2.11914 36 2.00493C35.724 1.99948 35.5 2.22386 35.5 2.5L35.5 5.48764C35.5 5.76379 35.724 5.987 36 5.99381C40.5963 6.10714 44.9775 7.77958 48.2378 10.6776C51.616 13.6805 53.5139 17.7533 53.5139 22C53.5139 26.2467 51.616 30.3195 48.2377 33.3224C44.9775 36.2204 40.5963 37.8929 36 38.0062C35.724 38.013 35.5 38.2362 35.5 38.5124L35.5 41.5Z" fill="#dddddd"/>
            <path d="M36 7.5C36 7.22386 36.224 6.99924 36.5 7.00732C39.8598 7.10576 43.1061 8.19423 45.7741 10.1242C48.5743 12.1497 50.5797 14.988 51.4768 18.1953C52.3739 21.4027 52.1121 24.7983 50.7324 27.8514C49.4153 30.766 47.1503 33.2116 44.2664 34.8429C44.0354 34.9736 43.7442 34.8919 43.6075 34.6644L42.0358 32.0479C41.888 31.8019 41.9778 31.4831 42.2254 31.338C44.2678 30.1413 45.8725 28.3822 46.8154 26.2956C47.8283 24.0543 48.0204 21.5615 47.3619 19.2069C46.7033 16.8523 45.2311 14.7687 43.1754 13.2817C41.2519 11.8903 38.9191 11.0947 36.4999 10.9981C36.224 10.9871 36 10.7643 36 10.4881L36 7.5Z" fill="#dddddd"/>
        </svg>
    </a>

    <nav class="hidden lg:flex justify-center space-x-6 text-white border-2 border-solid border-teal-500 rounded-full p-2 absolute left-1/2 transform -translate-x-1/2">
        <a href="?page=home" class="hover:bg-teal-500 hover:rounded-3xl p-2 {{ request('page') == 'home' ? 'bg-gray-700 text-gray-300 rounded-3xl p-2' : 'text-white' }}">Home</a>
        <a href="?page=about" class="hover:bg-teal-500 hover:rounded-3xl p-2 {{ request('page') == 'about' ? 'bg-gray-700 text-gray-300 rounded-3xl p-2' : 'text-white' }}">About</a>
        <a href="?page=skills" class="hover:bg-teal-500 hover:rounded-3xl p-2 {{ request('page') == 'skills' ? 'bg-gray-700 text-gray-300 rounded-3xl p-2' : 'text-white' }}">Skills</a>
        <a href="?page=projects" class="hover:bg-teal-500 hover:rounded-3xl p-2 {{ request('page') == 'projects' ? 'bg-gray-700 text-gray-300 rounded-3xl p-2' : 'text-white' }}">Projects</a>
        <a href="?page=contact" class="hover:bg-teal-500 hover:rounded-3xl p-2 {{ request('page') == 'contact' ? 'bg-gray-700 text-gray-300 rounded-3xl p-2' : 'text-white' }}">Contact</a>
    </nav>

</div>
