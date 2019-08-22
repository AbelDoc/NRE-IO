
    /**
     * @file NRE_FileStream.hpp
     * @brief Declaration of IO's API's Object : FileStream
     * @author Louis ABEL
     * @date 11/09/2018
     * @copyright CC-BY-NC-SA
     */

    #pragma once

    #include "../File/NRE_File.hpp"
    #include "../../Header/NRE_Exception.hpp"

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
             * @pure FileStream
             * @brief The base interface for Input, Output and IO file
             */
            class FileStream : public File {
                private:    //Fields
                    std::fstream file;  /**< The file's stream */

                public:    // Methods
                    //## Constructor ##//
                        /**
                         * Default Constructor
                         */
                        FileStream() = delete;
                        /**
                         * Construct a file stream with a given file's path
                         * @param p the file's stream path
                         */
                        FileStream(File const& p);

                    //## Copy-Constructor ##//
                        /**
                         * Copy forbidden
                         * @param f the file stream to copy
                         */
                        FileStream(FileStream const& f) = delete;

                    //## Move-Constructor ##//
                        /**
                         * Move f into this
                         * @param f the file stream to move
                         */
                        FileStream(FileStream && f) = default;

                    //## Deconstructor ##//
                        /**
                         * FileStream Deconstructor
                         */
                        virtual ~FileStream() = default;

                    //## Getter ##//
                        /**
                         * @return the file stream opening mode
                         */
                        virtual std::ios_base::openmode getMode() const = 0;
                        /**
                         * @return the file's stream opening state
                         */
                        bool isOpen() const;

                    //## Methods ##//
                        /**
                         * Open the file stream with the file's path and file stream opening mode
                         */
                        void open();
                        /**
                         * Open the file stream but truncate all data inside the file
                         */
                        void openEmpty();

                    //## Assignment Operator ##//
                        /**
                         * Copy assignment forbidden
                         * @param f the file stream to copy
                         * @return  the reference of himself
                         */
                        FileStream& operator =(FileStream const& f) = delete;
                        /**
                         * Move assignment of f into this
                         * @param f the file stream to move
                         * @return  the reference of himself
                         */
                        FileStream& operator=(FileStream && f) = default;

                protected: // Methods
                    /**
                     * @return the input file's stream
                     */
                    std::fstream& getStream();
            };

            /**
             * Output stream operator for the object
             * @param  stream the stream to add the object's string representation
             * @param  o      the object to add in the stream
             * @return the    modified stream
             */
            std::ostream& operator <<(std::ostream& stream, FileStream const& o);
        }
    }

    #include "NRE_FileStream.tpp"
