<div class="p-6 text-center m-auto w-1/2">

    <h2 class="text-xl mb-4">Contact Form</h2>

    <form wire:submit.prevent="submitForm">

        <!-- Name Input -->
        <div class="mb-4">
            <input wire:model.defer="name"
                   id="name"
                   class="border rounded w-full p-1"
                   type="text"
                   name="name"
                   placeholder="Name"
                   >
            @error('name')
                <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <!-- End Name Input -->

        <!-- Email Input -->
        <div class="mb-4">
            <input wire:model.defer="email"
                   id="email"
                   class="border rounded w-full p-1"
                   type="text"
                   name="email"
                   placeholder="Email"
                   >
            @error('email')
                <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <!-- End Email Input -->

        <!-- Message Input -->
        <div class="mb-4">
            <textarea wire:model.defer="contact_message"
                      id="contact_message"
                      class="border rounded w-full p-1"
                      rows="4"
                      name="contact_message"
                      placeholder="Message"
                      >
            </textarea>
            @error('contact_message')
                <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <!-- End Message Input -->

        <!-- Submit Button -->
        <div>
            <button class="bg-blue-500 py-2 px-4 text-white rounded font-bold">
                Submit
            </button>
        </div>
        <!-- End Submit Button -->

        <!-- Result Message -->
        @if(!empty($result_message))
            <p wire:click="clearResultMessage"
               class="cursor-pointer bg-green-500 text-sm text-white mt-4 rounded"
               >
                {{ $result_message }}
            </p>
        @endif
        <!-- End Result Message -->

    </form>

</div>
