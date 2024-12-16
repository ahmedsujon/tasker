<div>
    <main class="main_content_area">
        <!-- Proposal Submit Section  -->
        <section class="proposal_submit_wrapper">
            <form action="" wire:submit.prevent='submitProposal' class="form_area job_post_form_area h-full-screen space-between horizontal-m-w">
                <div class="w-100">
                    <div class="back_btn_grid mt-12">
                        <button type="button" class="page_back_btn">
                            <img src="{{ asset('assets/app/icons/arrow-left.svg') }}" alt="arrow left" />
                        </button>
                        <h3>Submit a Proposal</h3>
                    </div>
                    <div class="mt-32">
                        <div class="input_row">
                            <label for="" class="form_label">Description</label>
                            <textarea rows="5" name="" id="" wire:model.blur='description' placeholder="Write a description" class="input_field"></textarea>
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
                            <input type="file" accept=".pdf,.png,.jpg,.jpeg" id="contactUploadImage"
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
                        <div class="input_row">
                            <label for="" class="form_label">Estimate timeline task done?</label>
                            <input type="text" placeholder="Type timeline" wire:model.blur='timeline' class="input_field" />
                            @error('timeline')
                                <div class="form_status error">{{ $message }}</div>
                            @enderror
                            <ul class="timeline_list_area d-flex align-items-center flex-wrap" id="timelineListArea">
                                <li>
                                    <button type="button" wire:click.prevent='addTimeline("1-2 hr")' class="{{ $timeline == '1-2 hr' ? 'active' : '' }}">1-2 hr</button>
                                </li>
                                <li>
                                    <button type="button" wire:click.prevent='addTimeline("3-5 hr")' class="{{ $timeline == '3-5 hr' ? 'active' : '' }}">3-5 hr</button>
                                </li>
                                <li>
                                    <button type="button" wire:click.prevent='addTimeline("6-10 hr")' class="{{ $timeline == '6-10 hr' ? 'active' : '' }}">6-10 hr</button>
                                </li>
                                <li>
                                    <button type="button" wire:click.prevent='addTimeline("1-2 Days")' class="{{ $timeline == '1-2 Days' ? 'active' : '' }}">1-2 Days</button>
                                </li>
                                <li>
                                    <button type="button" wire:click.prevent='addTimeline("3-5 Days")' class="{{ $timeline == '3-5 Days' ? 'active' : '' }}">3-5 Days</button>
                                </li>
                                <li>
                                    <button type="button" wire:click.prevent='addTimeline("1-2 Weeks")' class="{{ $timeline == '1-2 Weeks' ? 'active' : '' }}">1-2 Weeks</button>
                                </li>
                                <li>
                                    <button type="button" wire:click.prevent='addTimeline("1 Month")' class="{{ $timeline == '1 Month' ? 'active' : '' }}">1 Month</button>
                                </li>
                                <li>
                                    <button type="button" wire:click.prevent='addTimeline("2 Months")' class="{{ $timeline == '2 Months' ? 'active' : '' }}">2 Months</button>
                                </li>
                                <li>
                                    <button type="button" wire:click.prevent='addTimeline("3 Months")' class="{{ $timeline == '3 Months' ? 'active' : '' }}">3 Months</button>
                                </li>
                            </ul>
                        </div>
                        <div class="input_row pt-16">
                            <label for="" class="form_label">Project Cost</label>
                            <input type="number" placeholder="Type cost" wire:model='cost' class="input_field" />
                            @error('cost')
                                <div class="form_status error">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <button type="submit" class="login_btn login_btn_sm mt-24">
                        {!! loadingStateWithText('', 'Submit Proposal') !!}
                    </button>
                </div>
            </form>
        </section>
    </main>
    {{-- @livewire('seller.layouts.inc.header') --}}
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
