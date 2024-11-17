<div>
    <form wire:submit.prevent="submitForm" class="php-email-form">
        @csrf
        <div class="row gy-4">

            <div class="col-md-6">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="text"class="form-control" placeholder="اسمك" wire:model.live="name">
            </div>

            <div class="col-md-6 ">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="email" class="form-control" placeholder="بريدك الالكتروني" wire:model.live="email">
            </div>

            <div class="col-md-6">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="text" class="form-control" placeholder="رقم الهاتف" wire:model.live="phone">
            </div>

            <div class="col-md-6">
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <input type="text" class="form-control" placeholder="موضوع الرسالة" wire:model.live="subject">
            </div>

            <div class="col-md-12">
                @error('content')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <textarea class="form-control" rows="6" placeholder="رسالتك..." wire:model.live="content"></textarea>
            </div>

            <div class="col-md-12 text-center">
                @if (session()->has('success'))
                    <div class="alert alert-success mb-3">{{ session('success') }}</div>
                @endif

                <button type="submit" wire:loading.attr="disabled">
                    <span wire:loading.remove>ارسال الرسالة</span>
                    <div class="spinner-border" role="status" wire:loading>
                        <span class="visually-hidden">يرجى الانتظار...</span>
                    </div>
                </button>
            </div>

        </div>
    </form>
</div>
