<div>

    <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="Enter your name" wire:model="name" />
        @error('name')
            <br />
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br /><br />
        <label for="mobile">Mobile:</label>
        <input type="text" name="mobile" placeholder="Enter your mobile number" wire:model="mobile" />
        @error('mobile')
            <br />
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br /><br />
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Enter your email" wire:model="email" />
        @error('email')
            <br />
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br /><br />
        <label for="photo">Photo:</label>
        <input type="file" name="photo" wire:model="photo" />
        @error('photo')
            <br />
            <span style="color: red;">{{ $message }}</span>
        @enderror
        <br /><br />
        <button type="submit">Submit</button>
    </form>

</div>
