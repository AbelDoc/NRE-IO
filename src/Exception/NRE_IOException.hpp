
    /**
     * @file NRE_IOException.hpp
     * @brief Declaration of System's API's Object : IOException
     * @author Louis ABEL
     * @date 19/08/2019
     * @copyright CC-BY-NC-SA
     */

    #pragma once

    #include <Header/NRE_Core.hpp>

    /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace Exception
         * @brief Core's API
         */
        namespace Exception {

            /**
             * @class IOException
             * @brief An exception thrown by io operation
             */
            class IOException : public IException {
                public:
                    /**
                     * Construct the exception with a custom log
                     * @param log the exception's log
                     */
                    IOException(Core::String const& log) throw() : IException(log) {
                    }
            };
        }
    }
