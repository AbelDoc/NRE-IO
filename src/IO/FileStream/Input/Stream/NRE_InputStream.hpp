
    /**
     * @file NRE_InputStream.hpp
     * @brief Declaration of Engine's IO's Object : InputStream
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
             * @pure InputStream
             * @brief Base interface for input related stream
             */
            class InputStream {
                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default constructor
                         */
                        InputStream() = default;

                    //## Copy-Constructor ##//
                        /**
                         * Copy forbidden
                         * @param i the input stream to copy
                         */
                        InputStream(InputStream const& i) = delete;

                    //## Move-Constructor ##//
                        /**
                         * Move i into this
                         * @param i the input stream to move
                         */
                        InputStream(InputStream && i) = default;

                    //## Deconstructor ##//
                        /**
                         * InputStream Deconstructor
                         */
                        virtual ~InputStream() = default;

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
                         * Read into the passed data from the file stream
                         * @param object the data to store the read return
                         */
                        template <class T>
                        void read(T& object) {
                            getStream() >> object;
                        }
                        /**
                         * Read a file's line and store it into the given string
                         * @param line the string to store the read line
                         * @return if the file has been totally read
                         */
                        bool readLine(Core::String& line);
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
                         * @param i the input stream to copy
                         * @return  the reference of himself
                         */
                        InputStream& operator =(InputStream const& i) = delete;
                        /**
                         * Move assignment of i into this
                         * @param i the input stream to move
                         * @return  the reference of himself
                         */
                        InputStream& operator =(InputStream && i) = default;
            };
        }
    }

    #include "NRE_InputStream.tpp"
