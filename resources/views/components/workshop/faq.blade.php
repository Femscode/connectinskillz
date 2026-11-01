<section id="faqs" class="py-20 sm:py-28 bg-slate-50/60 border-t border-slate-200/70" x-data="{
    activeItem: 1,
    toggle(id) {
        this.activeItem = this.activeItem === id ? null : id;
    }
}">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-14 sm:mb-18">
            <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full text-xs font-extrabold tracking-wider text-[#0052cc] uppercase bg-blue-50 border border-blue-100/80 mb-3">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Got Questions?
            </span>
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">
                Frequently Asked Questions
            </h2>
            <p class="text-slate-600 text-sm sm:text-base mt-3 max-w-xl mx-auto">
                Everything you need to know about the 5-week Digital Business Analysis workshop, curriculum, and hands-on training.
            </p>
        </div>

        <!-- Accordion List -->
        <div class="space-y-4">
            <!-- FAQ 1 -->
            <div
                class="rounded-2xl bg-white border transition-all duration-300 overflow-hidden shadow-xs"
                :class="activeItem === 1 ? 'border-[#0052cc]/50 shadow-md shadow-blue-500/5 ring-1 ring-[#0052cc]/20' : 'border-slate-200/80 hover:border-slate-300'"
            >
                <button
                    type="button"
                    @click="toggle(1)"
                    class="w-full px-6 py-5 sm:px-7 sm:py-6 text-left flex items-center justify-between gap-4 cursor-pointer select-none transition-colors"
                >
                    <div class="flex items-center gap-4">
                        <span
                            class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold transition-colors flex-shrink-0"
                            :class="activeItem === 1 ? 'bg-[#0052cc] text-white' : 'bg-slate-100 text-slate-500'"
                        >
                            01
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-slate-900">
                            What is digital business analysis?
                        </h3>
                    </div>
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 text-slate-500 transition-transform duration-300 flex-shrink-0"
                        :class="activeItem === 1 ? 'rotate-180 bg-blue-50 text-[#0052cc]' : ''"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </button>
                <div
                    x-show="activeItem === 1"
                    x-collapse
                    class="px-6 pb-6 sm:px-7 sm:pb-7 text-slate-600 text-sm sm:text-base leading-relaxed pl-16 sm:pl-18 border-t border-slate-100 pt-3"
                >
                    Digital business analysis is the process of analyzing digital data to drive business decisions and strategies. It bridges the gap between technology capabilities and strategic organizational objectives to foster continuous digital growth.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div
                class="rounded-2xl bg-white border transition-all duration-300 overflow-hidden shadow-xs"
                :class="activeItem === 2 ? 'border-[#0052cc]/50 shadow-md shadow-blue-500/5 ring-1 ring-[#0052cc]/20' : 'border-slate-200/80 hover:border-slate-300'"
            >
                <button
                    type="button"
                    @click="toggle(2)"
                    class="w-full px-6 py-5 sm:px-7 sm:py-6 text-left flex items-center justify-between gap-4 cursor-pointer select-none transition-colors"
                >
                    <div class="flex items-center gap-4">
                        <span
                            class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold transition-colors flex-shrink-0"
                            :class="activeItem === 2 ? 'bg-[#0052cc] text-white' : 'bg-slate-100 text-slate-500'"
                        >
                            02
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-slate-900">
                            Why is digital business analysis important for organizations?
                        </h3>
                    </div>
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 text-slate-500 transition-transform duration-300 flex-shrink-0"
                        :class="activeItem === 2 ? 'rotate-180 bg-blue-50 text-[#0052cc]' : ''"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </button>
                <div
                    x-show="activeItem === 2"
                    x-collapse
                    class="px-6 pb-6 sm:px-7 sm:pb-7 text-slate-600 text-sm sm:text-base leading-relaxed pl-16 sm:pl-18 border-t border-slate-100 pt-3"
                >
                    Digital business analysis helps organizations gain actionable insights, optimize complex processes, eliminate operational bottlenecks, and substantially improve end-to-end performance in an increasingly competitive digital landscape.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div
                class="rounded-2xl bg-white border transition-all duration-300 overflow-hidden shadow-xs"
                :class="activeItem === 3 ? 'border-[#0052cc]/50 shadow-md shadow-blue-500/5 ring-1 ring-[#0052cc]/20' : 'border-slate-200/80 hover:border-slate-300'"
            >
                <button
                    type="button"
                    @click="toggle(3)"
                    class="w-full px-6 py-5 sm:px-7 sm:py-6 text-left flex items-center justify-between gap-4 cursor-pointer select-none transition-colors"
                >
                    <div class="flex items-center gap-4">
                        <span
                            class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold transition-colors flex-shrink-0"
                            :class="activeItem === 3 ? 'bg-[#0052cc] text-white' : 'bg-slate-100 text-slate-500'"
                        >
                            03
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-slate-900">
                            What are the key responsibilities of a digital business analyst?
                        </h3>
                    </div>
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 text-slate-500 transition-transform duration-300 flex-shrink-0"
                        :class="activeItem === 3 ? 'rotate-180 bg-blue-50 text-[#0052cc]' : ''"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </button>
                <div
                    x-show="activeItem === 3"
                    x-collapse
                    class="px-6 pb-6 sm:px-7 sm:pb-7 text-slate-600 text-sm sm:text-base leading-relaxed pl-16 sm:pl-18 border-t border-slate-100 pt-3"
                >
                    A digital business analyst identifies core business needs, gathers and documents stakeholder requirements, analyzes workflow data, formulates pragmatic strategies, and implements digital solutions through Agile sprint planning and testing.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div
                class="rounded-2xl bg-white border transition-all duration-300 overflow-hidden shadow-xs"
                :class="activeItem === 4 ? 'border-[#0052cc]/50 shadow-md shadow-blue-500/5 ring-1 ring-[#0052cc]/20' : 'border-slate-200/80 hover:border-slate-300'"
            >
                <button
                    type="button"
                    @click="toggle(4)"
                    class="w-full px-6 py-5 sm:px-7 sm:py-6 text-left flex items-center justify-between gap-4 cursor-pointer select-none transition-colors"
                >
                    <div class="flex items-center gap-4">
                        <span
                            class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold transition-colors flex-shrink-0"
                            :class="activeItem === 4 ? 'bg-[#0052cc] text-white' : 'bg-slate-100 text-slate-500'"
                        >
                            04
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-slate-900">
                            How does digital business analysis contribute to decision-making and strategy development?
                        </h3>
                    </div>
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 text-slate-500 transition-transform duration-300 flex-shrink-0"
                        :class="activeItem === 4 ? 'rotate-180 bg-blue-50 text-[#0052cc]' : ''"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </button>
                <div
                    x-show="activeItem === 4"
                    x-collapse
                    class="px-6 pb-6 sm:px-7 sm:pb-7 text-slate-600 text-sm sm:text-base leading-relaxed pl-16 sm:pl-18 border-t border-slate-100 pt-3"
                >
                    Digital business analysis provides data-driven insights, risk assessments, and feasibility studies that inform leadership decision-making, ensuring that organizational investments align with clear customer ROI and measurable market opportunities.
                </div>
            </div>

            <!-- FAQ 5 -->
            <div
                class="rounded-2xl bg-white border transition-all duration-300 overflow-hidden shadow-xs"
                :class="activeItem === 5 ? 'border-[#0052cc]/50 shadow-md shadow-blue-500/5 ring-1 ring-[#0052cc]/20' : 'border-slate-200/80 hover:border-slate-300'"
            >
                <button
                    type="button"
                    @click="toggle(5)"
                    class="w-full px-6 py-5 sm:px-7 sm:py-6 text-left flex items-center justify-between gap-4 cursor-pointer select-none transition-colors"
                >
                    <div class="flex items-center gap-4">
                        <span
                            class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold transition-colors flex-shrink-0"
                            :class="activeItem === 5 ? 'bg-[#0052cc] text-white' : 'bg-slate-100 text-slate-500'"
                        >
                            05
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-slate-900">
                            What are the common tools and techniques used in digital business analysis?
                        </h3>
                    </div>
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 text-slate-500 transition-transform duration-300 flex-shrink-0"
                        :class="activeItem === 5 ? 'rotate-180 bg-blue-50 text-[#0052cc]' : ''"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </button>
                <div
                    x-show="activeItem === 5"
                    x-collapse
                    class="px-6 pb-6 sm:px-7 sm:pb-7 text-slate-600 text-sm sm:text-base leading-relaxed pl-16 sm:pl-18 border-t border-slate-100 pt-3"
                >
                    Common tools and techniques include data analytics suites, market research frameworks, process modeling (BPMN, UML), user story mapping in Jira and Confluence, wireframing with Figma, and UX Journey mapping. All of which you practice hands-on in this workshop.
                </div>
            </div>

            <!-- FAQ 6 -->
            <div
                class="rounded-2xl bg-white border transition-all duration-300 overflow-hidden shadow-xs"
                :class="activeItem === 6 ? 'border-[#0052cc]/50 shadow-md shadow-blue-500/5 ring-1 ring-[#0052cc]/20' : 'border-slate-200/80 hover:border-slate-300'"
            >
                <button
                    type="button"
                    @click="toggle(6)"
                    class="w-full px-6 py-5 sm:px-7 sm:py-6 text-left flex items-center justify-between gap-4 cursor-pointer select-none transition-colors"
                >
                    <div class="flex items-center gap-4">
                        <span
                            class="w-8 h-8 rounded-lg flex items-center justify-center text-xs font-bold transition-colors flex-shrink-0"
                            :class="activeItem === 6 ? 'bg-[#0052cc] text-white' : 'bg-slate-100 text-slate-500'"
                        >
                            06
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-slate-900">
                            How does digital business analysis support the identification of business requirements?
                        </h3>
                    </div>
                    <div
                        class="w-8 h-8 rounded-full flex items-center justify-center bg-slate-100 text-slate-500 transition-transform duration-300 flex-shrink-0"
                        :class="activeItem === 6 ? 'rotate-180 bg-blue-50 text-[#0052cc]' : ''"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </div>
                </button>
                <div
                    x-show="activeItem === 6"
                    x-collapse
                    class="px-6 pb-6 sm:px-7 sm:pb-7 text-slate-600 text-sm sm:text-base leading-relaxed pl-16 sm:pl-18 border-t border-slate-100 pt-3"
                >
                    Digital business analysis helps discover and define explicit business requirements by conducting deep-dive stakeholder interviews, analyzing user needs, assessing market trends, and mapping technical capabilities to ensure solution clarity.
                </div>
            </div>
        </div>

        <!-- Support / Help Callout Card -->
        <div class="mt-12 sm:mt-16 p-6 sm:p-8 rounded-3xl bg-gradient-to-r from-blue-50 via-slate-50 to-blue-50/50 border border-blue-100/80 flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xs text-center sm:text-left">
            <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-5">
                <div class="w-12 h-12 rounded-2xl bg-[#0052cc] text-white flex items-center justify-center flex-shrink-0 shadow-md shadow-blue-500/20">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>
                    </svg>
                </div>
                <div>
                    <h4 class="text-base font-extrabold text-slate-900">
                        Still have questions about the workshop?
                    </h4>
                    <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                        Our course advisors are ready to walk you through syllabus details, schedule, and certification.
                    </p>
                </div>
            </div>

            <button
                type="button"
                @click="$dispatch('open-workshop-enroll')"
                class="px-6 py-3 rounded-xl bg-[#0052cc] hover:bg-[#0040a8] text-white text-xs sm:text-sm font-bold shadow-md shadow-blue-600/20 transition-all duration-200 hover:scale-[1.02] active:scale-[0.98] whitespace-nowrap cursor-pointer"
            >
                Speak with an Advisor
            </button>
        </div>
    </div>
</section>
