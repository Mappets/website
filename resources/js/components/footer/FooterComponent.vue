<template>
    <footer class="footer-area section-gap" v-if="show">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Home</h4>
                    <ul>
                        <li>
                            <a href="#">Lorem ipsum</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>About</h4>
                    <ul>
                        <li>
                            <a href="#">Lorem ipsum</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>FAQ</h4>
                    <ul>
                        <li>
                            <a href="#">Lorem ipsum</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 single-footer-widget">
                    <h4>Open source</h4>
                    <ul>
                        <li>
                            <a href="#">Lorem ipsum</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 single-footer-widget">
                    <h4>Contact</h4>
                    <preference-locale-component></preference-locale-component>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form
                            target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get"
                            class="form-inline"
                        >
                            <input
                                class="form-control"
                                name="EMAIL"
                                placeholder="Your Email Address"
                                onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Your Email Address '"
                                required
                                type="email"
                            />
                            <button class="click-btn btn btn-default">
                                <span class="lnr lnr-arrow-right"></span>
                            </button>
                            <div style="position: absolute; left: -5000px;">
                                <input
                                    name="b_36c4fd991d266f23781ded980_aefe40901a"
                                    tabindex="-1"
                                    value
                                    type="text"
                                />
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center">
                <p class="footer-text m-0 col-lg-6 col-md-12">
                    &copy; Mappets.
                </p>
                <div class="col-lg-6 col-md-6 social-link">
                    <div
                        class="download-button d-flex flex-row justify-content-end"
                    >
                        <div class="buttons gray flex-row d-flex">
                            <i class="fa fa-apple" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span>
                                        <br />on App Store
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="buttons gray flex-row d-flex">
                            <i class="fa fa-android" aria-hidden="true"></i>
                            <div class="desc">
                                <a href="#">
                                    <p>
                                        <span>Available</span>
                                        <br />on Play Store
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    props: ["show"]
};
</script>

<style></style>
