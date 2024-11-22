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
                        <label for="" class="form_label">Description</label>
                        <textarea rows="5" name="" id="" placeholder="Write a title" class="input_field"></textarea>
                        <div class="form_status text-end">999 characters left</div>
                    </div>
                    <div class="input_row pt-16">
                        <label for="" class="form_label">Attach File</label>
                        <div class="attach_file_area" id="fileUploadLabel">
                            <img src="{{ asset('assets/app/icons/attach_image.svg') }}" alt="attach image" />
                            <div>
                                <h4>Attach file</h4>
                                <h6 id="dropText">pdf, png, jpeg and max 10mb</h6>
                            </div>
                        </div>
                        <input type="file" accept="" id="contactUploadImage" hidden />
                        <div class="file_uploaded_area">
                            <h3>Just attatched files</h3>
                            <div class="upload_grid">
                                <img src="{{ asset('assets/app/images/client/file_upload_image1.png') }}"
                                    alt="upload image" class="upload_img" />
                                <div>
                                    <h4>Attachment file 2024.jpeg</h4>
                                    <h6>1.2 MB</h6>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="file_delete_btn">
                                        Delete
                                    </button>
                                </div>
                            </div>
                            <div class="upload_grid">
                                <img src="{{ asset('assets/app/images/client/file_upload_image2.png') }}"
                                    alt="upload image" class="upload_img" />
                                <div>
                                    <h4>Attachment file 2024.jpeg</h4>
                                    <h6>1.2 MB</h6>
                                </div>
                                <div class="text-end">
                                    <button type="button" class="file_delete_btn">
                                        Delete
                                    </button>
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
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const fileInput = document.getElementById("contactUploadImage");
            const label = document.getElementById("fileUploadLabel");
            const uploadText = document.getElementById("dropText");

            // Highlight label when dragging over it
            label.addEventListener("dragover", function(e) {
                e.preventDefault();
                label.classList.add("drag_active");
                uploadText.textContent = "Drop your file here";
            });

            label.addEventListener("dragleave", function(e) {
                e.preventDefault();
                label.classList.remove("drag_active");
                $("#dropText").html("<span>pdf, png, jpeg and max 10mb</span>  ");
            });

            label.addEventListener("drop", function(e) {
                e.preventDefault();
                label.classList.remove("drag_active");

                // Assign the dropped file to the file input
                if (e.dataTransfer.files.length > 0) {
                    fileInput.files = e.dataTransfer.files;

                    // Trigger the change event so Livewire can detect the file
                    var event = new Event("change");
                    fileInput.dispatchEvent(event);
                }
            });

            // Trigger file selection by clicking on the label
            label.addEventListener("click", function() {
                fileInput.click();
            });
        });
    </script>
@endpush
