<template>
    <h1>Hello {{ name }}! Hello again. And again!</h1>
</template>

<style>
    body {
        background: #212121;
        color: #f5f5f5;
        padding: 6rem;
    }
    h1 {
        text-align: center;
    }
</style>

<script>
    export default {
        data: () => {
            return { name: 'world' };
        },
    };
</script>
