<div class="space-y-6">

    <!-- HEADER BAR -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2 border-b border-slate-200/80">
        <div>
            <h1 class="text-xl font-semibold text-slate-800">System Settings</h1>
            <p class="text-xs text-slate-500">Manage company branding, logos, contact numbers, address, and GST details</p>
        </div>

        <button wire:click="save" 
                wire:loading.attr="disabled"
                type="button" 
                class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-medium px-5 py-2.5 rounded-md text-xs transition-colors cursor-pointer shadow-xs disabled:opacity-50">
            <span wire:loading wire:target="save, logoFile, faviconFile" class="animate-spin text-xs"><i class="ri-loader-4-line"></i></span>
            <i class="ri-save-line text-sm"></i>
            <span>Save Settings</span>
        </button>
    </div>

    <form wire:submit="save" class="space-y-6">
        
        <!-- 1. BRANDING & LOGO ASSETS -->
        <div class="bg-white rounded-lg border border-slate-200 shadow-xs p-5 sm:p-6 space-y-5">
            <div class="flex items-center gap-2 text-slate-800 font-bold text-sm border-b border-slate-100 pb-3">
                <i class="ri-palette-line text-[#FF8B02] text-base"></i>
                <span>Company Branding & Logos</span>
            </div>

            <!-- Logo & Favicon Upload Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                
                <!-- Logo File Upload -->
                <div class="space-y-2 p-4 bg-[#FAF9F5] border border-slate-200 rounded-md">
                    <label class="block font-semibold text-slate-800 text-xs">Main Company Logo</label>
                    <input type="file" wire:model="logoFile" accept="image/*" class="w-full text-xs text-slate-500 file:mr-2 file:py-1 file:px-2.5 file:rounded-md file:border-0 file:text-xs file:font-medium file:bg-[#FFF4E5] file:text-[#FF8B02] hover:file:bg-[#FF8B02] hover:file:text-white transition-colors cursor-pointer border border-slate-200 rounded-md p-1" />
                    @error('logoFile') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror

                    <!-- Logo Preview -->
                    <div class="pt-2 flex items-center gap-3">
                        <div class="w-28 h-12 bg-white border border-slate-200 rounded-md p-1.5 flex items-center justify-center overflow-hidden">
                            @if($logoFile)
                                <img src="{{ $logoFile->temporaryUrl() }}" class="max-h-full max-w-full object-contain">
                            @elseif($logo_path)
                                <img src="{{ asset($logo_path) }}" class="max-h-full max-w-full object-contain" onerror="this.src='https://placehold.co/120x40/f8fafc/64748b?text=Logo'">
                            @else
                                <i class="ri-image-line text-slate-300 text-xl"></i>
                            @endif
                        </div>
                        <div class="text-[11px] text-slate-500">
                            @if($logoFile)
                                <span class="text-emerald-600 font-semibold">New logo selected</span>
                            @else
                                <span>Current Logo</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Favicon File Upload -->
                <div class="space-y-2 p-4 bg-[#FAF9F5] border border-slate-200 rounded-md">
                    <label class="block font-semibold text-slate-800 text-xs">Website Favicon Icon</label>
                    <input type="file" wire:model="faviconFile" accept="image/*,.ico" class="w-full text-xs text-slate-500 file:mr-2 file:py-1 file:px-2.5 file:rounded-md file:border-0 file:text-xs file:font-medium file:bg-blue-50 file:text-blue-600 hover:file:bg-blue-600 hover:file:text-white transition-colors cursor-pointer border border-slate-200 rounded-md p-1" />
                    @error('faviconFile') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror

                    <!-- Favicon Preview -->
                    <div class="pt-2 flex items-center gap-3">
                        <div class="w-12 h-12 bg-white border border-slate-200 rounded-md p-1.5 flex items-center justify-center overflow-hidden">
                            @if($faviconFile)
                                <img src="{{ $faviconFile->temporaryUrl() }}" class="w-8 h-8 object-contain">
                            @elseif($favicon_path)
                                <img src="{{ asset($favicon_path) }}" class="w-8 h-8 object-contain" onerror="this.src='https://placehold.co/32x32/f8fafc/64748b?text=ICO'">
                            @else
                                <i class="ri-file-image-line text-slate-300 text-xl"></i>
                            @endif
                        </div>
                        <div class="text-[11px] text-slate-500">
                            @if($faviconFile)
                                <span class="text-emerald-600 font-semibold">New favicon selected</span>
                            @else
                                <span>Current Favicon</span>
                            @endif
                        </div>
                    </div>
                </div>

            </div>

            <!-- Company Name & Tagline -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Company Name <span class="text-rose-500">*</span></label>
                    <input type="text" wire:model="company_name" placeholder="Shallom Prefab Systems" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    @error('company_name') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>

                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Company Tagline / Slogan</label>
                    <input type="text" wire:model="company_tagline" placeholder="Design for the Future | Innovative Engineering" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    @error('company_tagline') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- 2. CONTACT CHANNELS & LOCATION -->
        <div class="bg-white rounded-lg border border-slate-200 shadow-xs p-5 sm:p-6 space-y-5">
            <div class="flex items-center gap-2 text-slate-800 font-bold text-sm border-b border-slate-100 pb-3">
                <i class="ri-phone-line text-[#FF8B02] text-base"></i>
                <span>Contact Channels & Office Address</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- Phone -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Primary Phone Number <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <i class="ri-phone-fill absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                        <input type="text" wire:model="phone" placeholder="+91-9899552380" class="w-full pl-8 pr-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    </div>
                    @error('phone') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>

                <!-- WhatsApp -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">WhatsApp Number</label>
                    <div class="relative">
                        <i class="ri-whatsapp-fill absolute left-3 top-1/2 -translate-y-1/2 text-emerald-500 text-xs"></i>
                        <input type="text" wire:model="whatsapp" placeholder="+919899552380" class="w-full pl-8 pr-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    </div>
                    @error('whatsapp') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>

                <!-- Landline -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Landline / Hotline</label>
                    <div class="relative">
                        <i class="ri-customer-service-2-line absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                        <input type="text" wire:model="landline" placeholder="07942550323" class="w-full pl-8 pr-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    </div>
                    @error('landline') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Email -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Official Email Address <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <i class="ri-mail-fill absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                        <input type="email" wire:model="email" placeholder="shallomprefabsystems@gmail.com" class="w-full pl-8 pr-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    </div>
                    @error('email') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>

                <!-- Website URL -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Website URL</label>
                    <div class="relative">
                        <i class="ri-global-line absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                        <input type="url" wire:model="website" placeholder="http://www.shallomprefab.com/" class="w-full pl-8 pr-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    </div>
                    @error('website') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Address -->
            <div class="space-y-1">
                <label class="block text-xs font-semibold text-slate-700">Office & Works Address <span class="text-rose-500">*</span></label>
                <div class="relative">
                    <i class="ri-map-pin-2-fill absolute left-3 top-3 text-slate-400 text-xs"></i>
                    <textarea wire:model="address" rows="2" placeholder="Full office address..." class="w-full pl-8 pr-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]"></textarea>
                </div>
                @error('address') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
            </div>

            <!-- Business Hours -->
            <div class="space-y-1">
                <label class="block text-xs font-semibold text-slate-700">Business Hours</label>
                <input type="text" wire:model="business_hours" placeholder="Monday to Saturday | 09:00 AM – 07:00 PM IST" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                @error('business_hours') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- 3. GST, TAX & CORPORATE INFORMATION -->
        <div class="bg-white rounded-lg border border-slate-200 shadow-xs p-5 sm:p-6 space-y-5">
            <div class="flex items-center gap-2 text-slate-800 font-bold text-sm border-b border-slate-100 pb-3">
                <i class="ri-[#FF8B02] ri-shield-check-line text-[#FF8B02] text-base"></i>
                <span>GST Registration & Corporate Information</span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- GST Number -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">GST Registration Number</label>
                    <input type="text" wire:model="gst_no" placeholder="07ANDPG4822C2ZI" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs font-mono focus:outline-none focus:border-[#FF8B02]">
                    @error('gst_no') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>

                <!-- Proprietor -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Proprietor / Key Contact</label>
                    <input type="text" wire:model="proprietor" placeholder="Mr. Arvind Kumar Gautam" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    @error('proprietor') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>

                <!-- Incorporation Year -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Incorporation Year / Details</label>
                    <input type="text" wire:model="incorporation_year" placeholder="2009 (GST Registered: July 2017)" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    @error('incorporation_year') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <!-- Turnover -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Annual Turnover Range</label>
                    <input type="text" wire:model="turnover" placeholder="₹5 Crore – ₹25 Crore" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    @error('turnover') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>

                <!-- Team Size -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Team Size</label>
                    <input type="text" wire:model="team_size" placeholder="26 – 50 Skilled Professionals" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    @error('team_size') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>

                <!-- Banker -->
                <div class="space-y-1">
                    <label class="block text-xs font-semibold text-slate-700">Primary Banker</label>
                    <input type="text" wire:model="banker" placeholder="AXIS BANK" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                    @error('banker') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- About Summary -->
            <div class="space-y-1">
                <label class="block text-xs font-semibold text-slate-700">About Company Summary</label>
                <textarea wire:model="about_summary" rows="3" placeholder="Brief summary of Shallom Prefab Systems..." class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]"></textarea>
                @error('about_summary') <span class="text-rose-500 text-[11px] block">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- FOOTER SUBMIT ACTION -->
        <div class="flex items-center justify-end pb-8">
            <button wire:click="save" 
                    wire:loading.attr="disabled"
                    type="button" 
                    class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-semibold px-6 py-3 rounded-md text-xs transition-colors cursor-pointer shadow-md disabled:opacity-50">
                <span wire:loading wire:target="save, logoFile, faviconFile" class="animate-spin text-xs"><i class="ri-loader-4-line"></i></span>
                <i class="ri-save-line text-sm"></i>
                <span>Save All Settings</span>
            </button>
        </div>

    </form>

</div>