<div>
    <section class="job_post_wrapper">
        <form action="" class="form_area job_post_form_area h-full-screen space-between">
            <div class="w-100">
                <div class="back_btn_grid back_btn_white pt-12">
                    <button type="button" class="page_back_btn" onclick="history.back()">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                    </button>
                    <h3>Post a job</h3>
                </div>
                <div class="horizontal-m-w mt-24">
                    <div class="input_row">
                        <label for="" class="form_label">Project Size</label>
                        <div class="project_size_area">
                            <div class="color_radio_btn">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="projectSizeRadio"
                                        id="projectSizeRadio1" />
                                    <label class="form-check-label" for="projectSizeRadio1">
                                        <span class="label">Large</span>
                                        <span class="time">Extended or multifaceted <b>[estimate : 1+ day ]</b>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="color_radio_btn">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="projectSizeRadio"
                                        id="projectSizeRadio2" checked />
                                    <label class="form-check-label" for="projectSizeRadio2">
                                        <span class="label">Medium</span>
                                        <span class="time">Precisely defined projects
                                            <b>[estimate : 6 - 10 hours]</b>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="color_radio_btn">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="projectSizeRadio"
                                        id="projectSizeRadio3" />
                                    <label class="form-check-label" for="projectSizeRadio3">
                                        <span class="label">Small</span>
                                        <span class="time">Simple and efficient tasks
                                            <b>[estimate : 4 - 6 hours]</b>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="horizontal-m-w w-100">
                <button type="submit" class="login_btn">
                    Next Step
                    <img src="{{ asset('assets/app/icons/arrow-right.svg') }}" alt="arrow icon" />
                </button>
            </div>
        </form>
    </section>
</div>
