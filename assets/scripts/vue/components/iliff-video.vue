<template>
    <article class="video">
        <header>
            <a :href="permalink">
                <h3 v-text="title"></h3>
                <div class="featured-image" :style="background"></div>
            </a>
        </header>
        <p class="video-excerpt" v-text="excerpt"></p>
        <footer>
            <strong>Posted:</strong>
            <time :datetime="timestamp" v-text="date"></time>
        </footer>
    </article>
</template>

<script>
    export default {
        name: "iliff-video",
        props: [
            "permalink",
            "title",
            "excerpt",
            "timestamp",
            "date",
            "src"
        ],
        computed: {
            background() {
                return 'background-image: url("' + this.src + '");';
            }
        }
    }
</script>
