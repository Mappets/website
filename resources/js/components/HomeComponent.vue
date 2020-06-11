<template>
    <!-- start banner Area -->
    <section class="home-banner-area">
        <div class="container">
            <div
                class="row fullscreen d-flex align-items-center justify-content-between"
            >
                <div class="home-banner-content col-lg-6 col-md-6">
                    <h1>
                        {{ $t("slogan") }}
                    </h1>
                    <p>
                        {{ $t("description") }}
                    </p>
                    <div
                        class="download-button d-flex flex-row justify-content-start"
                    >
                        <div class="buttons flex-row d-flex">
                            <i class="fa fa-apple" aria-hidden="true"></i>
                            <div class="desc">
                                <div>
                                    <p>
                                        <span>{{ $t("soon") }}</span> <br />
                                        {{ $t("inAppStore") }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="buttons dark flex-row d-flex">
                            <i class="fa fa-android" aria-hidden="true"></i>
                            <div class="desc">
                                <div>
                                    <p>
                                        <span>{{ $t("soon") }}</span> <br />
                                        {{ $t("inPlayStore") }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-img col-lg-4 col-md-6">
                    <img class="img-fluid" src="img/banner-img.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
</template>

<script>
export default {};
</script>

<style></style>
