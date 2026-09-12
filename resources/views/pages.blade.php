<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WFNS President Message</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Anda bisa menambahkan custom background pattern di sini jika memiliki asetnya */
        .bg-pattern {
            background-color: #262464; /* Warna biru gelap (navy) */
            /* background-image: url('path-to-your-pattern.png'); */
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">

    <!-- Main Container (A4 / Prospectus Aspect Ratio) -->
    <div class="relative w-full max-w-[800px] h-[1130px] bg-pattern text-white overflow-hidden shadow-2xl font-sans">
        
        <!-- Top Content Section -->
        <div class="pt-24 px-16 relative z-10 w-[85%]">
            <h4 class="text-[#00a8e8] text-lg font-medium mb-1">Welcome</h4>
            <h1 class="text-4xl font-semibold leading-tight mb-10 tracking-wide">
                Message from the <br>
                WFNS President
            </h1>

            <div class="text-sm space-y-5 leading-relaxed text-gray-100 pr-10">
                <p>
                    <span class="font-bold">Dear Industry Partners and Friends,</span><br>
                    It is my distinct privilege to welcome you to the 20th World Congress of Neurosurgery in Bali, Indonesia. The World Federation of Neurosurgical Societies represents more than 49,000 neurosurgeons worldwide, dedicated to advancing clinical practice, training and research across borders.
                </p>
                <p>
                    Our longstanding partnership with industry continues to drive the technological innovation that saves lives and improves patient outcomes every day. In Bali, that partnership takes centre stage.
                </p>
                <p>
                    I invite you to join us to showcase your advances, meet the surgeons who use them, and build collaborations that outlast the week.
                </p>
            </div>

            <!-- Blockquote / Highlight -->
            <div class="mt-12 border-l-[6px] border-[#00a8e8] pl-5">
                <p class="text-[22px] font-medium leading-snug">
                    Our partnership with industry drives<br>
                    the innovation that saves lives-in Bali,<br>
                    it takes centre stage.
                </p>
            </div>
        </div>

        <!-- Bottom Landscape Background -->
        <!-- Ganti URL ini dengan foto pemandangan Pura/Tanah Lot Anda -->
        <div class="absolute bottom-0 left-0 w-full h-[45%] bg-cover bg-bottom z-0" 
             style="background-image: url('https://images.unsplash.com/photo-1537996194471-e657df975ab4?q=80&w=1600&auto=format&fit=crop');">
            <!-- Overlay agar teks nama tetap terbaca -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#262464]/80 via-transparent to-transparent"></div>
        </div>

        <!-- Portrait & Name Section -->
        <div class="absolute bottom-[40px] left-16 z-20 flex items-end gap-6">
            <!-- Portrait Image -->
            <!-- Ganti URL ini dengan foto tokoh yang memiliki background transparan (PNG) -->
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=400&auto=format&fit=crop" 
                 alt="Luis A B Borba" 
                 class="w-[280px] h-[350px] object-cover object-top mask-image-bottom" />
            
            <!-- Name & Title -->
            <div class="pb-10">
                <h2 class="text-2xl font-bold text-white mb-1 drop-shadow-md">Luis A B Borba</h2>
                <p class="text-[#00a8e8] text-sm font-medium leading-snug drop-shadow-md">
                    President, World Federation of<br>
                    Neurosurgical Societies
                </p>
            </div>
        </div>

        <!-- Footer Section -->
        <div class="absolute bottom-0 left-0 w-full flex justify-between items-end z-30">
            <!-- Page Number Shape -->
            <div class="bg-[#00a8e8] text-white w-20 h-14 rounded-tr-[40px] flex items-center justify-center font-bold text-xl">
                4
            </div>
            
            <!-- Footer Text -->
            <div class="text-[#00a8e8] text-[10px] pb-3 pr-6 text-right uppercase tracking-wider font-semibold">
                Sponsorship & Exhibition Prospectus - WFNS 2027 Bali
            </div>
            
            <!-- Bottom Border Line -->
            <div class="absolute bottom-0 left-20 w-full h-2 bg-[#00a8e8]"></div>
        </div>

    </div>

</body>
</html>