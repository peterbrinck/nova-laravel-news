<template>
    <card class="h-auto">
        <div class="px-3 py-3">
            <h1 class="text-center text-sm text-80 uppercase mb-3">Laravel News</h1>
            <div v-for="news in feedNews" class="max-w-sm rounded overflow-hidden">
                <div class="px-6 py-4">
                    <a class="no-underline dim font-bold text-90 text-xl mr-6" :href="news.link">{{ news.title }}</a>
                    <p class="text-grey-darker text-base">
                        {{ formatDate(news.pubDate) }}
                    </p>
                </div>
            </div>
        </div>
    </card>
</template>

<script>
export default {
    props: ['card'],

    data: () => {
        return {
            feedNews: [],
        };
    },

    mounted() {
        Nova.request().get('/nova-vendor/nova-laravel-news/news').then(response => {
            this.feedNews = JSON.parse(response.data).channel.item.slice(0,5);
        });
    },

    methods: {
        formatDate: function (date) {
            var monthNames = [
                "January", "February", "March",
                "April", "May", "June", "July",
                "August", "September", "October",
                "November", "December"
              ];

            var date = new Date(date);
            var day = date.getDate();
            var monthIndex = date.getMonth();
            var year = date.getFullYear();

            return day + ' ' + monthNames[monthIndex] + ' ' + year;
        }
    }
}
</script>
