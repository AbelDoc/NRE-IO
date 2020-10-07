
    /**
     * @file NRE_OutputStream.hpp
     * @brief Declaration of Engine's IO's Object : OutputStream
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

     #pragma once

    #include <fstream>

    #include <Header/NRE_Core.hpp>

     /**
     * @namespace NRE
     * @brief The NearlyRealEngine's global namespace
     */
    namespace NRE {
        /**
         * @namespace IO
         * @brief IO's API
         */
        namespace IO {

            /**
             * @pure OutputStream
             * @brief Base interface for output related stream
             */
            class OutputStream {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default constructor
                         */
                        OutputStream() = default;

                    //## Copy-Constructor ##//
                        /**
                         * Copy forbidden
                         * @param o the output stream to copy
                         */
                        OutputStream(OutputStream const& o) = delete;

                    //## Move-Constructor ##//
                        /**
                         * Move o into this, leaving o empty
                         * @param o the output stream to move
                         */
                        OutputStream(OutputStream && o) = default;

                    //## Deconstructor ##//
                        /**
                         * OutputStream Deconstructor
                         */
                        virtual ~OutputStream() = default;

                    //## Getter ##//
                        /**
                         * @return the file's stream
                         */
                        virtual std::fstream& getStream() = 0;
                        /**
                         * @return the stream cursor position
                         */
                        std::streampos getPosition();

                    //## Methods ##//
                        /**
                         * Write the passed data into the file stream
                         * @param object the data to write
                         */
                        template <class T>
                        void write(T const& object) {
                            getStream() << object;
                        }
                        /**
                         * Set the file cursor position to the begin + offset
                         * @param offset the file's offset
                         */
                        void seekBegin(size_t offset = 0);
                        /**
                         * Set the file cursor position to the end - offset
                         * @param offset the file's offset
                         */
                        void seekEnd(size_t offset = 0);

                    //## Assignment Operator ##//
                        /**
                         * Copy assignment forbidden
                         * @param o the output stream to copy
                         * @return  the reference of himself
                         */
                        OutputStream& operator =(OutputStream const& o) = delete;
                        /**
                         * Move assignment of o into this
                         * @param o the output stream to move
                         * @return      the reference of himself
                         */
                        OutputStream& operator =(OutputStream && o) = default;
            };
        }
    }

    #include "NRE_OutputStream.tpp"
