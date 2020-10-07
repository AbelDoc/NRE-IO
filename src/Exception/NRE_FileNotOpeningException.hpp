
    /**
     * @file NRE_FileNotOpeningException.hpp
     * @brief Declaration of System's API's Object : FileNotOpeningException
     * @author Louis ABEL
     * @date 19/08/2019
     * @copyright CC-BY-NC-SA
     */

    #pragma once

    #include "NRE_IOException.hpp"

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
             * @class FileNotOpeningException
             * @brief An exception thrown when attempting to open a file
             */
            class FileNotOpeningException : public IOException {
                public:
                    /**
                     * Construct the exception with a custom log
                     * @param log the exception's log
                     */
                    FileNotOpeningException(Core::String const& log) throw() : IOException("FileNotOpening Exception : " + log) {
                    }
            };
        }
    }
