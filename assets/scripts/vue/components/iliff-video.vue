<template>
    <article class="video">
        <header>
            <a :href="permalink">
                <h3 v-text="title"></h3>
            </a>
        </header>
        <p class="video-excerpt" v-text="excerpt" @click="showVideo"></p>
        <footer>
            <strong>Posted:</strong>
            <time :datetime="timestamp" v-text="date"></time>
        </footer>
    </article>
</template>

<script>
    export default {
        name: "iliff-video",
        props: ["permalink", "title", "excerpt", "timestamp", "date"],
        methods: {
            showVideo() {
                //window.location.href = this.permalink;
            }
        }
    }
</script>
