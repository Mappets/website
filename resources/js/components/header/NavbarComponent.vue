<template>
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="#">
                        <img
                            src="img/brand-mono.png"
                            alt="Mappets"
                            title="Mappets"
                            class="logo"
                        />
                    </a>
                </div>
                <nav id="nav-menu-container color-black">
                    <ul class="nav-menu">
                        <sign-in-button-component></sign-in-button-component>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    //
};
</script>

<style scoped>
@media (min-width: 778px) {
    .logo {
        width: 190px;
    }
}
</style>
