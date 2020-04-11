<template>
    <li class="sign-in-button">
        <a href="https://web.mappets.app/">{{ signIn }}</a>
    </li>
</template>

<script>
export default {
    props: ["signIn"]
};
</script>

<style scoped>
.sign-in-button {
    border: 2px groove #fff;
    border-radius: 15px 15px 15px 0px;
}
</style>
