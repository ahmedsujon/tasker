<div>
    <section class="job_post_wrapper">
        <form wire:submit.prevent='nextStep' class="form_area job_post_form_area h-full-screen space-between">
            <div class="w-100">
                <div class="back_btn_grid back_btn_white pt-12">
                    <a href="{{ route('client.jobPostTwo') }}" type="button" class="page_back_btn">
                        <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                    </a>
                    <h3>Post a job</h3>
                </div>
                <div class="horizontal-m-w mt-24">
                    <div class="input_row">
                        <label for="" class="form_label">Location</label>
                        <input type="text" placeholder="Enter location" wire:model.blur='location' class="input_field" />
                        @error('location')
                            <div class="form_status error">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input_row">
                        <label for="" class="form_label">Description</label>
                        <textarea rows="5" name="" id="" placeholder="Write a title" wire:model.blur='description'
                            class="input_field"></textarea>
                        <div class="form_status text-end">999 characters left</div>
                        @error('description')
                            <div class="form_status error">{{ $message }}</div>
                        @enderror
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
                        <input type="file" accept="pdf,png,jpg,jpeg" id="contactUploadImage"
                            wire:model.live='newAttachments' multiple hidden />
                        @error('newAttachments.*')
                            <div class="form_status error">{{ $message }}</div>
                        @enderror
                        @error('attachments')
                            <div class="form_status error">{{ $message }}</div>
                        @enderror
                        @if ($attachments)
                            <div class="file_uploaded_area">
                                <h3>Attached Files</h3>
                                @foreach ($attachments as $index => $attachment)
                                <div class="upload_grid">
                                    <!-- Display file icon or preview for images -->
                                    @if (in_array($attachment->getMimeType(), ['image/jpeg', 'image/jpg', 'image/png', 'image/gif']))
                                        <img src="{{ $attachment->temporaryUrl() }}" class="upload_img" style="height: 50px; width: 50px;"/>
                                    @else
                                        <img src="{{ asset('assets/custom/icons/file-type-pdf.svg') }}" class="upload_img" style="height: 50px; width: 50px;"/>
                                    @endif
                                    <div>
                                        <h4>{{ $attachment->getClientOriginalName() }}</h4>
                                        <h6>
                                            @if ($attachment->getSize() >= 1024 * 1024)
                                                {{ round($attachment->getSize() / (1024 * 1024), 2) }} MB
                                            @else
                                                {{ round($attachment->getSize() / 1024, 2) }} KB
                                            @endif
                                        </h6>
                                    </div>
                                    <div class="text-end">
                                        <button type="button" class="file_delete_btn" wire:click="removeAttachment({{ $index }})">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="horizontal-m-w w-100">
                <button type="submit" class="login_btn">
                    {!! loadingStateWithText('nextStep', 'Next Step') !!} <img src="{{ asset('assets/app/icons/arrow-right.svg') }}"
                        alt="arrow icon" />
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
