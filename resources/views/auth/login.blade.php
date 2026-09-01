<div class="sm:mx-auto sm:w-full sm:max-w-md space-y-6">
    
    <!-- Studio Logo Header -->
    <div class="text-center space-y-3">
        <a href="{{ route('home') }}" wire:navigate class="inline-block group">
            <div class="bg-white p-3.5 rounded-2xl border border-slate-200/80 shadow-xs group-hover:scale-105 transition-transform duration-300 inline-block">
                <img src="{{ asset('logo.webp') }}" alt="Shallom Prefab Systems Logo" class="h-12 w-auto object-contain mx-auto">
            </div>
        </a>
        
        <div class="space-y-1">
            <div class="inline-flex items-center gap-1.5 bg-[#FFF4E5] text-[#FF8B02] px-3 py-1 rounded-full text-[11px] font-bold uppercase tracking-wider">
                <i class="ri-shield-keyhole-line"></i>
                <span>ADMIN CONTROL CENTER</span>
            </div>
            <h1 class="text-2xl font-light text-slate-800 tracking-tight">
                Sign in to <span class="text-[#FF8B02] font-normal">Management Desk</span>
            </h1>
        </div>
    </div>

    <!-- Clean Minimal White Card -->
    <div class="bg-white rounded-3xl border border-slate-200/80 p-8 sm:p-10 shadow-xs space-y-6">
        
        <!-- Auto Fill Helper Pill -->
        <div x-data="{
                fillCredentials() {
                    $wire.email = 'admin@shallomprefab.com';
                    $wire.password = 'password';
                }
             }"
             class="bg-[#FAF9F5] border border-slate-200/80 rounded-2xl p-4 flex items-center justify-between gap-3 text-xs">
            <div class="space-y-0.5">
                <div class="font-bold text-slate-800 flex items-center gap-1">
                    <i class="ri-user-shared-line text-[#FF8B02]"></i>
                    <span>Default Admin Account:</span>
                </div>
                <div class="text-slate-500 font-mono text-[11px]">admin@shallomprefab.com</div>
            </div>
            <button @click="fillCredentials()" type="button" 
                    class="bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-3 py-1.5 rounded-full text-[10px] uppercase tracking-wider shrink-0 transition-colors shadow-2xs">
                Auto Fill
            </button>
        </div>

        <!-- Form -->
        <form wire:submit="authenticate" class="space-y-5" x-data="{ showPassword: false }">
            
            <!-- Email -->
            <div class="space-y-1.5">
                <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700">
                    Email Address <span class="text-[#FF8B02]">*</span>
                </label>
                <div class="relative rounded-2xl">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <i class="ri-mail-line text-base"></i>
                    </div>
                    <input id="email" 
                           type="email" 
                           wire:model="email" 
                           placeholder="admin@shallomprefab.com" 
                           required
                           class="w-full bg-[#FAF9F5] text-slate-900 placeholder-slate-400 border border-slate-200/80 rounded-2xl pl-11 pr-4 py-3 text-sm focus:outline-none focus:border-[#FF8B02] focus:ring-1 focus:ring-[#FF8B02] transition-colors">
                </div>
                @error('email') 
                    <span class="text-red-500 text-xs font-semibold flex items-center gap-1 mt-1">
                        <i class="ri-error-warning-line"></i> {{ $message }}
                    </span> 
                @enderror
            </div>

            <!-- Password -->
            <div class="space-y-1.5">
                <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700">
                    Password <span class="text-[#FF8B02]">*</span>
                </label>
                <div class="relative rounded-2xl">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <i class="ri-lock-2-line text-base"></i>
                    </div>
                    <input id="password" 
                           :type="showPassword ? 'text' : 'password'" 
                           wire:model="password" 
                           placeholder="••••••••" 
                           required
                           class="w-full bg-[#FAF9F5] text-slate-900 placeholder-slate-400 border border-slate-200/80 rounded-2xl pl-11 pr-11 py-3 text-sm focus:outline-none focus:border-[#FF8B02] focus:ring-1 focus:ring-[#FF8B02] transition-colors">
                    
                    <button type="button" 
                            @click="showPassword = !showPassword" 
                            class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-700">
                        <i :class="showPassword ? 'ri-eye-off-line' : 'ri-eye-line'" class="text-base"></i>
                    </button>
                </div>
                @error('password') 
                    <span class="text-red-500 text-xs font-semibold flex items-center gap-1 mt-1">
                        <i class="ri-error-warning-line"></i> {{ $message }}
                    </span> 
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2 cursor-pointer text-xs text-slate-600 font-medium select-none">
                    <input type="checkbox" wire:model="remember" class="w-4 h-4 rounded text-[#FF8B02] border-slate-300 focus:ring-[#FF8B02]">
                    <span>Remember session</span>
                </label>

                <a href="{{ route('home') }}" wire:navigate class="text-xs font-bold text-slate-500 hover:text-[#FF8B02] transition-colors">
                    Back to Website →
                </a>
            </div>

            <!-- Submit Button -->
            <button type="submit" 
                    wire:loading.attr="disabled"
                    class="w-full bg-[#FF8B02] hover:bg-[#E67A00] disabled:opacity-50 text-white font-extrabold py-3.5 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
                <i wire:loading.remove class="ri-login-box-line text-base"></i>
                <i wire:loading class="ri-loader-4-line text-base animate-spin"></i>
                <span wire:loading.remove>SIGN IN TO PORTAL</span>
                <span wire:loading>Authenticating...</span>
            </button>

        </form>

    </div>

    <!-- Footer -->
    <div class="text-center text-xs text-slate-500 font-medium">
        © {{ date('Y') }} Shallom Prefab Systems • ISO 9001:2015 Certified
    </div>

</div>
